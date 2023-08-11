<?php

# CONDITIONALS

/*
	==
	=== (matches the value and the datatype)
	<
	>
	<=
	>=
	!=
	!==
*/

$num = 5;
if ($num == 5) {
	echo '5 passed';
}

echo '<br>';

$num2 = 5;
if ($num2 === '5') {
	echo "$num2 passed"; // won't execute as we are trying to check a string and an int
} elseif ($num == 6) {
	echo '6 passed';
} else {
	echo 'did not pass';
}


# NESTING IF

$num = 5;
if ($num > 4) {
	if ($num < 10) {
		echo "<br>$num passed <br>";
	}
}

/*
	   LOGICAL OPERATORS

	   and %%
	   or ||
	   xor 
   */


if ($num > 4 and $num < 10) {
	echo "$num passed";
}

if ($num > 4 && $num < 10) {
	echo "$num passed";
}

if ($num > 4 or $num < 100) {

}



if ($num > 4 || $num < 100) {

}


// XOR = Only one has to be true, NOT BOTH
if ($num > 4 XOR $num < 100) {

}

# SWITCH

$favColor = 'red';

switch ($favColor) {
	case 'red':
		echo 'Your favorite color is red';
		break;

	case 'blue':
		echo 'Your favorite color is blue';
		break;

	case 'green':
		echo 'Your favorite color is green';
		break;
	default:
		echo 'Your favorite color is something else';
}

?>