<?php
class Person{
    public $name;
    public function greet(){
        echo "Hello, my name is " . $this->name . ".\n";
    }
}

$shafayet = new Person();
$shafayet->name = "Shafayet";
$shafayet->greet();
?>