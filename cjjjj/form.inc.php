<?php 

class Calc {

    public $num1;
    public $num2;
    public $unit1;


    public $result;
    public $formula;

    public function __construct($num1Inserted,$num2Inserted,$unit1){
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->unit1 = $unit1;
        $this->result = null;
        $this->formula = null;
    }

    public function FormulaMethod(){
        if($this->unit1 === "square"){
           $this->result = "A = Square: " . $this->num2 * $this->num2;
           $this->formula = "A = Square: a²";
        }
        if($this->unit1 === "rectangle"){
            $this->result = "A = Rectangle: " . $this->num1 * $this->num2;
            $this->formula = "A = Rectangle: L * W";
         }
         if($this->unit1 === "circle"){
            $this->result = "A = Circle: " . 3.14159265359 * ($this->num2 * $this->num2);
            $this->formula = "A = Circle: πr²";
         }
        

        return $this->result;
    }
    
    public function getResult(){
        return $this->result;
    }

    public function getFormula(){
        return $this->formula;
    }


}

?>