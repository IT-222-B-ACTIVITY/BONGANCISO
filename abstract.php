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
    public function getDumper(){

        return PHP_SAPI === 'cli'?
        new WebDumper():
        new ConsoleDumper();
    }
}

$dumper = new WebDumper();
$dumper->dump("Hello World Web");
$dumper2 =  new ConsoleDumper();
$dumper2->dump("Hello Comsole");

