<?php

interface Logger{
    public function log($message);

}
class FileLogger implements Logger {

    private $handle;

    private $logFile;

    public function __construct($filename,$mode = 'r+'){
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode) or die('Could not open log file.');
    }
    public function log($message){
        $message = date("D M j G:i:s T Y") . " - " . $message;
        fwrite($this->handle, $message);
    }
    
    public function __destruct(){
        if($this->handle){
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger{
    public function log($message){
    echo sprintf("log %s to the Database\n", $message);
}
}

$logger =  new FileLogger('./log.txt', 'r+');
$logger->log("Hello Enrico" . PHP_EOL);
$logger->log("Hello World" . PHP_EOL);

$logger = [
    new fileLogger('./log.txt'),
    new DatabaseLogger()
];

foreach($logger as $loggers){
    $loggers->log("Enrico loggin");
}