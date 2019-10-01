<?php

$q1 = $_POST["question1"];
$q2 = $_POST["question2"];
$q3 = $_POST["question3"];
$q4 = $_POST["question4"];
$q5 = $_POST["question5"];

$num_correct = 0;
$total_questions = 5;

$num_correct += $q1 == 4 ? 1 : 0;
$num_correct += $q2 == 6 ? 1 : 0;
$num_correct += $q3 == 1 ? 1 : 0;
$num_correct += $q4 == 2 ? 1 : 0;
$num_correct += $q5 == 45 ? 1 : 0;

echo "Question 1: What is 2 + 2?<br />";
echo "You answered: " . $q1 . "<br />";
echo "Correct answer: 4 <br /><br />";

echo "Question 2: What is 2 * 3?<br />";
echo "You answered: " . $q2 . "<br />";
echo "Correct answer: 6 <br /><br />";

echo "Question 3: What is limsup((-1)^n) as n-> infinity?<br />";
echo "You answered: " . $q3 . "<br />";
echo "Correct answer: 1 <br /><br />";

echo "Question 4: What is 6/3?<br />";
echo "You answered: " . $q4 . "<br />";
echo "Correct answer: 2 <br /><br />";

echo "Question 5: What is the sum of all digits up to and including 9?<br />";
echo "You answered: " . $q5 . "<br />";
echo "Correct answer: 45 <br /><br />";

echo "You got " . $num_correct . " correct out of " . $total_questions . "!<br />";
echo "That's a " . ($num_correct * 100) / $total_questions . "%";

?>