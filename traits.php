<?php

trait loggers{
    public function  log($msg){
        echo date("D M j G:i:s T Y") . " - " . $msg; 
  
    }
}
class bankAccount{

    use loggers;

    private $accountNumber;

    public  function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }

}

class User{

    use loggers;

    public function __construct(){
        $this->log('A new user created');
    }
}

class savings{

    use loggers;
    private $savings;

    public function __construct($savings){
        $this->savings = $savings;
        $this->log("Your money : $savings ");
    }
}

$bank = new bankAccount("OC001");
echo PHP_EOL;
$bank2 = new bankAccount("OC002");
echo PHP_EOL;
$user = new user();
echo PHP_EOL;
$savings = new savings('1000');
echo PHP_EOL;

trait process{
    public function preprocess(){
        echo "Preprocess... done " .PHP_EOL;
    }
}
trait compiler{
    public function compile(){
        echo "Compile code... done " .PHP_EOL;
    }
}
trait assembler{
    public function create(){
        echo "Create the object code files... done " .PHP_EOL;
    }
}
trait linker{
    public function execute(){
        echo "Create the executable file... done " .PHP_EOL;
    }
}

class IDE{
    use compiler, process, assembler, linker;

    public function run(){
        $this->preprocess();
        $this->compile();
        $this->create();
        $this->execute();

        echo "Execute the file... done"  . PHP_EOL;
    }
}
$ide = new IDE();
$ide->run();