<?php

	//variable starts with $
	//string has to use quotation marks
	//line ends with semicolon
	$first_name = "Marika";
	$last_name = "Vinkmann";
	
	//show code to browser
	//for adding up numbers we use + sign
	//for adding up strings we use .
	//space is considered a character, thus written inbetween quotation marks (example below)
	echo $first_name." ".$last_name;
	
	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal

	$age = 5;
	//if age is smaller than or equal to 6, then you can't sleep at lunchtime
	if ($age <=6){
		//it is true
		echo "yes, you can sleep at lunchtime";
	}else{
		//it is false
		echo "no, you are at school";
	}
?>
