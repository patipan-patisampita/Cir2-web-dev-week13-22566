<?php
//Array
$season = array("Summer", "Winter", "Spring", "Autumn");
echo "Season are: $season[0], $season[1], $season[2] and $season[3] <br />";
?>

<?php
$week[0] = "Monday";
$week[1] = "Tuesday";
$week[2] = "wednesday";
$week[3] = "Thirdday";
$week[4] = "Friday";
$week[5] = "Saturday";
$week[6] = "Sunday";
print("Week0 are: $week[0]<br />");
print("Week1 are: $week[1]<br />");
print("Week2 are: $week[2]<br />");
print("Week3 are: $week[3]<br />");
print("Week4 are: $week[4]<br />");
print("Week5 are: $week[5]<br />");
print("Week6 are: $week[6]<br />");
?>

<?php
//Associative array use the double arrow operator, =>,
print "========<br />";
$salary = array(
    "Mark" => 35000, 
    "Jhon" => 45000, 
    "Eon" => 55000
);
print("Mark salary is: ".$salary["Mark"]."<br />");
print("Jhon salary is: " . $salary["Jhon"] . "<br />");
print("Eon salary is: " . $salary["Eon"] . "<br />");
?>

<?php
$myArray = array(
    0 => 'Big',
    1 => 'Small',
    2 => 'Up',
    3 => 'Down'
);
print "========<br />";
print("Big is: " . $myArray[0] . "<br />");
print("Small is: " . $myArray[1] . "<br />");
print("Up is: " . $myArray[2] . "<br />");
print("Down is: " . $myArray[3] . "<br />");
?>