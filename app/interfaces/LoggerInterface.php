<?php

namespace app\interfaces;

use app\enums\EnumLog;

interface LoggerInterface
{
  public function __construct(private string $name, private string|array $message, private EnumLog $enumLog);
  public function create();
}
