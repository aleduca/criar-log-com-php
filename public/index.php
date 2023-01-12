<?php

use app\database\Connection;
use app\enums\EnumLog;
use app\library\Log;
use app\Library\LoggerDatabase;
use app\Library\LoggerEmail;
use app\Library\LoggerFile;

require '../vendor/autoload.php';

try {
  $conn = Connection::getConnection();
  $query = $conn->query("select * fro users");
  var_dump($query->fetchAll());
} catch (\PDOException $th) {
  Log::create(new LoggerEmail('logs', $th->getTrace(), EnumLog::DatabaseError));
}
