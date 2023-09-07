<?php
/*
 * Subject: Different ways of using php
 * Authors: Kathleen Forgiarini
 * Date of creation: Sept 7, 2023
 * Dates of update:
 * This code shows you how to use html within php
 *
 */
$name = "Kathleen";
$salary = 2300;
$jobTitle = "Programmer";

echo "<!DOCTYPE html> <html> <body>";
echo "<table border = '1'> <tr> 
        <th> Employee name </th>
        <th> Salary </th>
        <th> Job title </th>
      </tr>";
echo "<tr>
        <td>$name</td>
        <td>$salary</td>
        <td>$jobTitle</td>
      </tr>";

echo "</table> </body> </html>";
?>