<?php

namespace App\Enums;

enum Role: string
{
  case PRINCIPAL = 'Director';
  case TEACHER = 'Docente';

  static function employees(): array
  {
    return [self::TEACHER];
  }
}
