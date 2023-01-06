<?php

namespace app\enums;

enum EnumLog: string
{
  case LoginError = 'Error in login';
  case DatabaseError = 'Error in database';
}
