<?php
/*
 Subject: Using variables and constants
 Authors: Kathleen Forgiarini
 Date of creation: Sept 7, 2023
 Dates of update: 
 This code shows you how to use variables, constants, single and double quotation
 
*/

define ("cl", "Lasalle College");
$name = "Kathleen";
$salary = 2300;
$jobTitle = "Programmer";

echo "My name is: " . $name . "<br/>";
echo "My salary is: " . $salary . "<br/>";
echo "My job title is: " . $jobTitle . "<br/>";
echo "I work in the college: " . cl . "<br/>";


/*echo "My name is: $name <br/>";
echo "My salary is: $salary <br/>";
echo "My job title is: $jobTitle <br/>";
echo "I work in the college: cl <br/>"; //PHP does not consider constants inside string*/