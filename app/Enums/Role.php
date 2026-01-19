<?php

namespace App\Enums;

enum Role: string
{
  case ADMINISTRATIVE = 'Administrativo';
  case TEACHER = 'Docente';
  case WORKER = 'Obrero';
  case REPRESENTATIVE = 'Representante';
  case STUDENT = 'Estudiante';

  static function employees(): array
  {
    return [self::ADMINISTRATIVE, self::TEACHER, self::WORKER];
  }
}
