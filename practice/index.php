<?php
echo "Hello world\n";

$a = 20;
$b = 30;

// echo $a+$b;

$c = 5.3;
$name = "shafayet";
// echo $a+$c;      //int + float possible

// echo $c + $name;    //numeric + string not possible

$months = array("Jan", "Feb", "Mar", "Apr", "May", "June");

// echo $months[1];

$nullvalue = null;

echo $nullvalue;

$person = new stdClass();
$person->name = "Rahim";
$person->age = "50";

// echo $person->name;

// define("PI", 3.1416);
const PI = 3.1416;
// echo PI;

$firstName = "Shafayet";
$lastName = "Ahmad";

$sum = $a+$b;
$fullName = $firstName . " " . $lastName;

echo $fullName ." ".$sum ."\n";

if($a > $b){
    echo "a > b";
} else if($a < $b){
    echo "a < b";
} else{
    echo "a == b";
}

echo "\n";

function sum($a, $b){
    return $a + $b;
}

echo sum(5, 10)."\n";

?>