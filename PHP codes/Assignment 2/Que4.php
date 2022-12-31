<!-- Wap to check if string is all in lowercase or not -->
<?php
// PHP program to check if a string has all
// lower case characters

$strings = array('pratham');

// Checking for above three strings one by one.
foreach ($strings as $value) {
	if (ctype_lower($value)) {
		echo "Yes, String is in lowercase.\n";
	} else {
		echo "No, String is not in lowercase.\n";
	}
}
?>
