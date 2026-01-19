<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Exception;
use Flight;
use Leaf\Auth;
use Leaf\Flash;
use Leaf\Http\Session;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Token\AccessToken;

final readonly class GoogleController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function handleCallback()
  {
    $error = Flight::request()->query->error;
    $code = Flight::request()->query->code;
    $state = Flight::request()->query->state;
    $provider = $this->auth->client('google');

    if ($error) {
      Flash::set([$error], 'errors');
      Flight::redirect('/login');

      exit;
    }

    if (!$code) {
      $authUrl = $provider?->getAuthorizationUrl();
      Session::set('oauth2state', $provider?->getState());
      Flight::redirect($authUrl);

      exit;
    }

    if (!$state || $state !== Session::get('oauth2state')) {
      Session::delete('oauth2state');
      Flash::set(['Invalid state'], 'errors');
      Flight::redirect('/login');

      exit;
    }

    try {
      $token = $provider?->getAccessToken('authorization_code', compact('code'));

      if ($token instanceof AccessToken) {
        $ownerDetails = $provider?->getResourceOwner($token);

        if ($ownerDetails instanceof GoogleUser) {
          $this->auth->fromOAuth([
            'token' => $token,
            'user' => [
              'email' => $ownerDetails->getEmail(),
              $this->auth->config('roles.key') => json_encode([Role::ADMINISTRATIVE->name]),
            ],
          ]);

          Flight::redirect('/');

          exit;
        }
      }
    } catch (Exception $exception) {
      Flash::set([$exception->getMessage()], 'errors');
      Flight::redirect('/login');

      exit;
    }
  }
}
