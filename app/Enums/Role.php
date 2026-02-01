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

  static function tryFromName(string $name): ?self
  {
    return match ($name) {
      self::PRINCIPAL->name => self::PRINCIPAL,
      self::TEACHER->name => self::TEACHER,
      default => null,
    };
  }
}
