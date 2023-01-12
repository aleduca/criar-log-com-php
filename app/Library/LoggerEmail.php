<?php

namespace app\Library;

use app\enums\EnumLog;
use app\interfaces\LoggerInterface;

class LoggerEmail implements LoggerInterface
{
  public function __construct(private string $name, private string|array $message, private EnumLog $enumLog)
  {
  }
  public function create()
  {
  }
}
