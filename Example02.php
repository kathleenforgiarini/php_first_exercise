<?php
/*
 * Subject: Different ways of using php
 * Authors: Kathleen Forgiarini
 * Date of creation: Sept 7, 2023
 * Dates of update:
 * This code shows you how to use php within html
 *
 */
$name = "Kathleen";
$salary = 2300;
$jobTitle = "Programmer";

?>

<!DOCTYPE html>

<html>
<body>
	<table border='1'>
		<tr>
			<th>Employee name</th>
			<th>Employee salary</th>
			<th>Employee job title</th>
		</tr>
		<tr>
			<td><?php echo $name?> </td>
			<td>
    			<?php
                    if ($salary > 2000) {
                        echo "The salary $salary is greater than 2000";
                    } else {
                        echo "The salary $salary is less than 2000";
                    }
                ?> 
			</td>
			<td><?php echo $jobTitle?> </td>
		</tr>
	</table>
</body>

</html>
