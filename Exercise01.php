<?php
/*
 * Subject: Different ways of using php / Using variables and constants
 * Authors: Kathleen Forgiarini
 * Date of creation: Sept 7, 2023
 * Dates of update:
 * This code shows you how to use php within html
 *
 */
define("CompanyName", "");
define("EmpLName", "");
define("EmpFName", "");
$EmpGrossPay = "";
$Tax = "";
$EmpNetPay = "";


echo "<!DOCTYPE html> <html> <body style='border: 3px solid red; padding: 10px'>
<p>Company name: " . CompanyName . "</p>
<p>Last name: " . EmpLName . "</p>
<p>First name: " . EmpFName . "</p>
<p>Gross Pay: $EmpGrossPay</p>
<p>Tax: $Tax</p>
<p>Net Pay: $EmpNetPay</p>
";
 
/*
?>

<!DOCTYPE html>

<html>
<body style="border: 3px solid red; padding: 10px">
	<p>Company name: <?php CompanyName?></p>
	<p>Last name: <?php EmpLName?></p>
	<p>First name: <?php EmpLName?></p>
	<p>Gross Pay: <?php $EmpGrossPay?></p>
	<p>Tax: <?php $Tax ?></p>
	<p>Net Pay: <?php $EmpNetPay?></p>
</body>

</html>*/