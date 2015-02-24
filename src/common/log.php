<?php
namespace common\log;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new RotatingFileHandler('../../log/error.log', Logger::WARNING));
