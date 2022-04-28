<?php
$q1 = $_POST["winner"];
$q2 = $_POST["date"];
$q3 = $_POST["even"];
$q4 = $_POST["odd"];
$q5 = $_POST["location"];
$count = 0;

echo "Q1: <br>";
echo "Your answer: " . $q1 . "<br>";
echo "Correct answer: Kansas Jayhawks<br><br>";

echo "Q2: <br>";
echo "Your answer: " . $q2 . "<br>";
echo "Correct answer: 2022<br><br>";

echo "Q2: <br>";
echo "Your answer: " . $q3 . "<br>";
echo "Correct answer: 14<br><br>";

echo "Q2: <br>";
echo "Your answer: " . $q4 . "<br>";
echo "Correct answer: 11<br><br>";

echo "Q2: <br>";
echo "Your answer: " . $q5 . "<br>";
echo "Correct answer: Lawrence<br><br>";

if($q1 == 'Kansas Jayhawks'){
	$count++;
}
if($q2 == '2022'){
	$count++;
}
if($q3 == '14'){
	$count++;
}
if($q4 == '11'){
	$count++;
}
if($q5 == 'Lawrence'){
	$count++;
}
$score = $count * 20;
echo "<br> You Answered " . $count . " correctly<br>";
echo "Total Score: " . $score . "%";
?>
