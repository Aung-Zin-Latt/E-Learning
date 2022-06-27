<?php

$firstName = 'Aung Zin';
$lastName = 'Latt';
$currentGrade = 9;
$finalAverage = .88;
$messageBody ='';

if(!$firstName || !$lastName) {
	echo 'Please enter a student name';
} elseif ($currentGrade < 9 || $currentGrade > 12) {
	echo 'This is only for high school students. Please enter a grade between 9 and 12'; 
} else {
	if($finalAverage < .70) {
		echo 'We look forward to seeing you at summer school,being july 1st';
	} else {
		switch ($currentGrade) {
			case 9:
				$messageBody = 'Conguratulations on completing your fresher year in High School';
				break;
			case 10:
				$messageBody = 'Conguratulations on completing your sophonore year in High School';
				break;
			case 11:
				$messageBody = 'Conguratulations on completing your junior year in High School';
				break;
			case 12:
				$messageBody = 'Conguratulations ! You have graduated High School';
				break;
			default :
				$messageBody = 'Error: Grade Level is not 9-12!';
				break;
		}
	}
	echo "Dear $firstName $lastName\n";
	echo "<br>";
	echo $messageBody;
}

?>