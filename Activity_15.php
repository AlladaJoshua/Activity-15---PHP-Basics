<?php

//Task 2: Variable Declaration and Data Types
echo "Task 2: Variable Declaration and Data Types";
echo "<br>";
$str = "Hello, PHP!";
$num = 10;
$bool = true;
echo $str . "<br>";
echo $num . "<br>";
echo $bool ? "true" : "false";


echo "<br>";
echo "<br>";


//Task 3: Conditionals
echo "Task 3: Conditionals";
echo "<br>";
if ($num > 10) {
    echo "The number is greater than 10.";
} else {
    echo "The number is not greater than 10.";
}


echo "<br>";
echo "<br>";


//Task 4: Loops
echo "Task 4: Loops";
echo "<br>";

//For Loop
echo "For Loop:";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

//While Loop
echo "<br>";
echo " While Loop:";
echo "<br>";
$i = 5;
while ($i >= 1) {
    echo $i . "<br>";
    $i--;
}


echo "<br>";
echo "<br>";


//Task 5: Arrays
//Indexed Array:
$fruits = array("Apple", "Banana", "Orange");

//Associative Array:
$person = array("name" => "John", "age" => 30, "city" => "New York");


//Task 6: Functions
function add($num1, $num2) {
    return $num1 + $num2;
}


echo "Task 6: Functions";
echo "<br>";
echo "Function Call:";
echo "<br>";
echo add(5, 3); // Output: 8


echo "<br>";
echo "<br>";


echo "Task 7: Form Handling (Bonus)";
echo "<br>";
?>
<!-- Task 7: Form Handling (Bonus)-->
<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello, $name! Welcome to our website.";
}
?>
