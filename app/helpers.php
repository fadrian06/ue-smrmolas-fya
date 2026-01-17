<?php

namespace Leaf {
  function _env(string $key, mixed $default = null): mixed
  {
    return $_ENV[$key] ?? $default;
  }
}
