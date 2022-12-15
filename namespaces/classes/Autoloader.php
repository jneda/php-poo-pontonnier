<?php

namespace App;

final class Autoloader
{
  static function register()
  {
    spl_autoload_register([__CLASS__, 'autoload']);
  }

  static function autoload(string $class): void
  {
    // 1. retire App\ de $class + 2. remplace \ par /
    $path = str_replace([__NAMESPACE__, '\\'], [__DIR__, '/'], $class) . '.php';

    if (file_exists($path)) {
      require_once($path);
    }
  }
}
