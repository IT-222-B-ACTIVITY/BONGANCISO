<?php 

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public $result;

    public function __construct($num1Inserted,$num2Inserted,$calInserted){
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
        $this->result = null;
    }

    public function calcMethod(){
        switch ($this->cal) {
            case 'add':
                $this->result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $this->result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $this->result = $this->num1 * $this->num2;
                break;

            
            default:
            $this->result = "Error";
                break;
        }

        return $this->result;
    }

    public function getResult(){
        return $this->result;
    }


}

?>