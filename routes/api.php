<?php

use flight\Container;
use Leaf\Auth;

Flight::group('/api', function () {
  Flight::route('GET /students-by-gender', function () {
    $db = Container::getInstance()->get(Auth::class)->db();

    $numberOfFemaleStudents = $db
      ->query('SELECT COUNT(*) numberOfFemaleStudents FROM students WHERE gender = "f"')
      ->obj()
      ->numberOfFemaleStudents;

    $numberOfMaleStudents = $db
      ->query('SELECT COUNT(*) numberOfMaleStudents FROM students WHERE gender = "m"')
      ->obj()
      ->numberOfMaleStudents;

    Flight::json(compact('numberOfMaleStudents', 'numberOfFemaleStudents'));
  });
});
