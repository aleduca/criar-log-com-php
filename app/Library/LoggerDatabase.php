<?php

namespace app\Library;

use app\database\models\Log;
use app\enums\EnumLog;
use app\interfaces\LoggerInterface;

readonly class LoggerDatabase implements LoggerInterface
{
  public function __construct(private string $name, private string|array $message, private EnumLog $enumLog)
  {
  }

  public function create()
  {
    // $type = match ($this->enumLog) {
    //   $this->enumLog::LoginError => 'Error in Login',
    //   $this->enumLog::DatabaseError => 'Error in database'
    // };

    $log = new Log;
    $log->create($this->name, json_encode($this->message), $this->enumLog->value);
  }
}
