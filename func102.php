<?php
//Function in PHP
//1.User-defined a function
function add($a,$b) {
    $add = $a + $b;
    print("This is a function add $a + $b = " . $add . "<br />");
}
add(10,5);

function sub($a,$b) {
    $sub = $a - $b;
    print("This is a function sub $a - $b = " . $sub . "<br />");
}
sub(10,5);

function multiple($a, $b)
{
    $multiple = $a * $b;
    print("This is a function multiple $a * $b = ". $multiple . "<br />");
}
multiple(10,5);

function division($a,$b) {
    $dvision = $a / $b;
    print("This is a function multiple $a / $b = ". $dvision . "<br />");
}
division(10,5);
?>