<?php
include("../../vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new RotatingFileHandler('../../log/error.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');
echo jsonencode(array("ok"));