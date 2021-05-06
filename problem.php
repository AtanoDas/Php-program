<?php
	
	echo "<center><h2>WELCOME To PHP program</h2></center>";
	echo "<center>_________________________________<br><br><br>";

			//Leap Year Check

	/*echo "<h3>Check Leap Year??";


	$a = 2020;

	if($a%4==0 || $a%400==0 && $a%100!=0 ){

		echo "<h1>".$a." is a Leap Year";
	}
	else{
		echo "<h1>".$a." is not a Leap Year";

	}*/



	/*echo "<h3>Check a input is alphabet, digit or special character..?? <br>";

	$char = '#';

	if ($char >='A' && $char<= 'Z') {
		# code...
		echo "<h2>".$char." is a Capital alphabet";
	}
	else if ($char >='a' && $char<= 'z') {
		# code...
		echo "<h2>".$char." is a Small alphabet";
	}
	else if ($char>=0 && $char<=9) {
		# code...
		if ($char>0) {
			# code...
			echo "<h2>".$char." is a Positive Digit";

		}
		else if ($char<0) {
			# code...
			echo "<h2>".$char." is a Negative Digit";

		}
		else{
			# code...
			echo "<h2>".$char." is a Zero Digit";

		}
	}
	else{
		echo "<h2>".$char." is a Special character";

	}*/



	//Calculating the gross salary
	$salary = 22000;
	echo "<h3>An employee basic salary is : ".$salary;

	if($salary <= 10000){
		$HRA = ($salary*20)/100;
		$DA = ($salary*80)/100;
		echo "<h3>HRA is: ".$HRA." DA is: ".$DA;
		$total = $salary+$HRA+$DA;
		echo "<h3>The employee gross salary is : ".$total;
	}
	else if($salary >= 10001 && $salary<=20000){
		$HRA = ($salary*25)/100;
		$DA = ($salary*90)/100;
		echo "<h3>HRA is: ".$HRA." DA is: ".$DA;
		$total = $salary+$HRA+$DA;
		echo "<h3>The employee gross salary is : ".$total;
	}
	else if($salary>=20001){
		$HRA = ($salary*30)/100;
		$DA = ($salary*95)/100;
		echo "<h3>HRA is: ".$HRA." DA is: ".$DA;
		$total = $salary+$HRA+$DA;
		echo "<h3>The employee gross salary is : ".$total;
	}







?>