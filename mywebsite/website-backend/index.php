<?php 
#the code below is to output a string in php
// the code below is to output a string in php
echo "my website <br>";
/*echo "<br>";
var_dump("my website");
 print /*the word print is to output*/ "my website";
 $myName = "Sity <br>";
 echo "<br>";
  $yearsOfExperience  = 4;
 echo $yearsOfExperience;
var_dump($myName);
var_dump($yearsOfExperience);
$height = 6.1;
echo "<br>";
var_dump($height);
$isMale = true;
echo "<br>";
var_dump($isMale);
// array
$fullName = array("Sity","Ese","Btc");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];
echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[1]";


// 28/10/2024
// null
$nothing = null;
echo "<br>";
var_dump($nothing);

// constant

define("pi", 3.142);
echo "<br>";
echo "pi";
echo "<br>";

// const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);


// 31/10/2024
// operators
// arithmetric operators
$x = 10;
$y = 5;
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";

// increment and decrement operators
echo $x++;
echo "<br>";
echo $x;
echo "<br>";
echo $x--;
echo "<br>";
echo $x;
echo "<br>";
// 1/11/2024
// assignment operators

$a = 100;
$b = 50;

// addition assignments
echo "<br>";
$a += $b;
echo $a;
echo "<br>";
$a -= $b;
echo $a;
echo "<br>";

// logical operators
// example of logical operator are : AND(&&), OR(||), XOR, NOT(!)
// the and operators works when both are correct
if ($a == 100 && $b == 50 ) {
echo "we are good to go.";
}
echo "<br>";
// the or operators works when one is correct 
if ($a == 100 || $b == 55 ) {
    echo "we are good to go.";
    }
    echo "<br>";
//    the xor operator works when one is true and one is false
    if ($a == 100 xor $b == 55 ) {
        echo "we are good to go.";
        }
        echo "<br>";
//    The NOT works when variable A is not true
if (!($a == 101)) {
    echo "we are good to go.";
    }
    echo "<br>";


    // 7/11/2024


    // PHP Condition Statements
    // There four notable conditional statements in PHP viz
    // If statement
    // If... else statement
    // If ...elseif... statement 
    // Switch statement

    // IF STATEMENT
    // The if statement is one of the most important statements in PHP 

    // Example:
    // ______________________
    // variable declaration

if (7>3){
    echo "Have a good day";
}

    $my_name = "sity";

    $present_time = date (format: "H:i");

    echo "<br>";

    echo "present time: $present_time <br>";

    if ($present_time >= 00.00 && $present_time < 12.00) {
        echo "<h3> Good Morning, $my_name! </h3>";
    }

    elseif ($present_time >= 12.00 && $present_time < 16.00) {
        echo "<h3> Good Afernoon, $my_name! </h3>";
    }
        
    elseif ($present_time >= 16.00 && $present_time < 23.59) {
        echo "<h3> Good Night, $my_name! </h3>";
    }

    else {
        echo "<h3> Hello, $my_name! </h3>";

    }
    echo "<br>";
   
    // Switch Statement
    // __________________

    $today = date (format: "D");
    echo "Today is: $today <br>";

    
    switch ($today) {
        case "Mon":
            echo "Hello everybody, It's Monday. Have a great week!";
            break;
        case "Tue":
            echo "Hello everybody, it's Tuesday. Do have a splendid week!";
            break;
        case "Wed":
            echo "Hello everybody, it's Wednesday. Do have a blessed week!";
            break;
        case "Thur":
            echo "Hello everybody, it's Thurday. Do have a miraculous week!";
            break;
        case "Fri":
            echo "Hello everybody, it's Friday. Do have a joyous week!";
            break;
        case "Sat":
            echo "Hello everybody, it's Saturday. Do have a fruitful week!";
            break;
        case "Sun":
            echo "Hello everybody, it's Sunday. Do have a graceful week!";
            break;
        default:
            echo "sorry, this is not a day in the week!";
            break;

    }
    echo "<br>";

    // 11/11/2024
    // php loops
    
    
    /*$numbers = 1;

    echo $numbers."<br>";

    $numbers++;

    echo $numbers."<br>";

    $numbers++;

    echo $numbers."<br>";*/

    // WHILE LOOP

   /* $numbers = 1;

    while ($numbers <= 10) {
        echo $numbers."<br>";
        $numbers++;
    }*/

    // DO WHILE LOOP

    /*$numbers = 11;
    do {
        echo $numbers."<br>";
        $numbers++;
    } while ($numbers <= 10);*/


    //  create an app that print number 1 to 100, print fizz for 
    //  multiple of 3, and buzz for multiple of 5, print fizzbuzz for multiple of 15.
    // FOR LOOP

    for ($numbers = 1; $numbers <= 100; $numbers++) 
        if ($numbers % 15 == 0) {
            echo "fizzbuzz <br>";
        } elseif ($numbers % 5 == 0) {
            echo "buzz <br>";
        } elseif ($numbers % 3 == 0) {
            echo "fizz <br>";
        }
         else {
            echo $numbers."<br>";
        }



    // FOR EACH

   /* $cars = array("BMW", "lexus", "Ferarri", "roseroise");
    echo "i love $cars[0]  <br>"; 
    echo "i love $cars[1]  <br>"; 
    echo "i love $cars[2]  <br>"; 
    echo "i love $cars[3]  <br>";*/

    $cars = array("BMW", "lexus", "Ferarri", "roseroise");

    foreach ($cars as $car) {
    echo "i love $cars[0]  <br>";    
    }

//15/11/2024
//Arrays 
$domesticAnimals = array ('Dogs', 'Cat', 'Horse', 'Goat', 'Cow');
$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];
 echo "<br>" . $domesticanimals[0];
echo "<br> $cities[0]";

// indexed array
// associative array
// multi-dimensional array

// count 
echo count ($domesticAnimals) .
'<br>';

// array_push
array_push ($cities, 'Abraka', 'Effurun', 'Patani', 'Ozoro');

var_dump($cities);

$cities[2] = 'ogwashi-uku';

echo '<br>';

var_dump($cities);

// associative array
$phone = ['brand'=> 'samsung','model' => '14 pro', 'color' => 'white', 'ROM'=> '256'];

echo '<br>';

var_dump($phone);

$phone["model"] = '15 pro';

echo '<br>';

var_dump($phone);

//www.github.com/elvincedik/backend-project.git

$fullname = array ("evans", "nduoma", "edike");

// associative array
//$fullname = array ("firstname"=> "evans", "middlename" => "nduoma");
//$fullname["firstname"];

// multi dimensional array
//$developer = array (["evans", "male"], ["lewis" "male"],);

echo "<br>";
echo "<br>";
 
function myMessage() {
    echo "Hello world";
};

myMessage("Hello world");

function greetMe() {
    echo "<br> good afternoon";
}

greetMe();
echo "<br>";
echo "<br>";

function streetname ($sname) {
    echo "$sname Asaba. <br>";
}

streetName("DLA");
streetName("Ezenei");

echo "<br>";
echo "<br>";

function Homeaddress ($snumber, $sname) {
    echo "$snumber street $sname Asaba. <br>";
}

Homeaddress("5th" ,"DLA");
Homeaddress("8th", "Ezenei");
?>





