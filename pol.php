<?php

interface Person{
     public function greet();
}

class English implements Person{
    public function greet(){
        return 'Hello';
    }
}
class Tagalog implements Person{
    public function greet(){
        return 'Kamusta';
    }
}
class Korean implements Person{
    public function greet(){
        return 'Anyeong';
    }
}
class Japan implements Person{
    public function greet(){
        return 'Konichiwa';
    }
}

class PersonGreat{

    public function greetings($people){
        foreach ($people as $person){
            echo $person->greet() . PHP_EOL;
        }
    }
}

$greet =  new PersonGreat();
$people = [
    new English(),
    new Tagalog(),
    new Korean(),
    new Japan()
];
$greet->greetings($people);