<?php

abstract class Dump{
    abstract public function dump($data);
}

class WebDumper extends Dump{
    public function dump($data){

        var_dump($data) . PHP_EOL;
    }
   
}

class ConsoleDumper extends Dump{
    public function dump($data){

        var_dump($data) . PHP_EOL;
    }
   
}

class DumperFactory{
    public static function getDumper(){

        return PHP_SAPI === 'cli'?
        new WebDumper():
        new ConsoleDumper();
    }
}

$dumper = DumperFactory::getDumper();
$dumper->dump('Hello World');
$dumper->dump('PHP');

