<?php
$capital1 = $_POST["capital1"];
$capital2 = $_POST["capital2"];
$capital3 = $_POST["capital3"];
$capital4 = $_POST["capital4"];
$capital5 = $_POST["capital5"];

$x = 0;

echo "Question #1: What is the capital of Spain?<br>";
echo "You answered: " . $capital1 . "<br>";
echo "Correct answer: Madrid<br><br>";
if ($capital1 == "Madrid") $x++;

echo "Question #2: What is the capital of Afghanistan?<br>";
echo "You answered: " . $capital2 . "<br>";
echo "Correct answer: Kabul<br><br>";
if ($capital2 == "Kabul") $x++;

echo "Question #3: What is the capital of Canada?<br>";
echo "You answered: " . $capital3 . "<br>";
echo "Correct answer: Ottawa<br><br>";
if ($capital3 == "Ottawa") $x++;

echo "Question #4: What is the capital of China?<br>";
echo "You answered: " . $capital4 . "<br>";
echo "Correct answer: Beijing<br><br>";
if ($capital4 == "Beijing") $x++;

echo "Question #5: What is the cpaital of Denmark?<br>";
echo "You answered: " . $capital5 . "<br>";
echo "Correct answer: Copenhagen<br><br>";
if ($capital5 == "Copenhagen") $x++;

echo "Your score: " . ($x * 20) . "%<br>";

?>