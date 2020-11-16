<?php
$numCorrect = 0;
$percentage = 0;
//access the global array called $_POST to get the values from the
// If form method='post'
if ((isset($_POST['q1'])) and (isset($_POST['q2'])) and (isset($_POST['q3'])) and (isset($_POST['q4'])) and (isset($_POST['q5']))) {

  // Show the radio button value, i.e. which one was checked when the form was sent
  $q1Answer = $_POST["q1"];
  if($q1Answer == "2")
    $numCorrect++;

  $q2Answer = $_POST["q2"];
  if($q2Answer == "4")
    $numCorrect++;

  $q3Answer = $_POST["q3"];
  if($q3Answer == "-(1/12)")
    $numCorrect++;

  $q4Answer = $_POST["q4"];
  if($q4Answer == "3i")
    $numCorrect++;

  $q5Answer = $_POST["q5"];
  if($q5Answer == "19")
    $numCorrect++;

    $percentage = (($numCorrect) / 5) * 100;

    echo "You answered " . $numCorrect . " correctly". "<br>";
    echo "Percent Correct: " . $percentage . "%" . "<br>";
    echo "Question 1 Answer: " . $q1Answer . "<br>";
    echo "\t" . "Correct Answer: " . "2" . "<br>";
    echo "Question 2 Answer: " . $q2Answer . "<br>";
    echo "\t" . "Correct Answer: " . "4" . "<br>";
    echo "Question 3 Answer: " . $q3Answer . "<br>";
    echo "\t" . "Correct Answer: " . "-(1/12)" . "<br>";
    echo "Question 4 Answer: " . $q4Answer . "<br>";
    echo "\t" . "Correct Answer: " . "3i" . "<br>";
    echo "Question 5 Answer: " . $q5Answer . "<br>";
    echo "\t" . "Correct Answer: " . "19" . "<br>";
}
else {
  $q1Answer = "Unselected";
  $q2Answer = "Unselected";
  $q3Answer = "Unselected";
  $q4Answer = "Unselected";
  $q5Answer = "Unselected";

  echo "Percent Correct: " . $percentage . "%" . "<br>";
  echo "Question 1 Answer: " . $q1Answer . "<br>";
  echo "Question 2 Answer: " . $q2Answer . "<br>";
  echo "Question 3 Answer: " . $q3Answer . "<br>";
  echo "Question 4 Answer: " . $q4Answer . "<br>";
  echo "Question 5 Answer: " . $q5Answer . "<br>";

}





?>
