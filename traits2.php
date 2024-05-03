<?php

trait FileLoggers
{
	public function log($msg)
	{
		echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
	}
}

trait DatabaseLoggers
{
	public function log($msg)
	{
		echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg .PHP_EOL;
	}
}

class Loggerss
{
	use FileLoggers, DatabaseLoggers{
        DatabaseLoggers::log as logToDatabase;
		FileLoggers::log insteadof DatabaseLoggers;
	}
}

$logger = new Loggerss();
$logger->log('this is a test message #1').PHP_EOL;
$logger->log('this is a test message #2').PHP_EOL;
$logger->logToDatabase('this is a test message #3').PHP_EOL;
