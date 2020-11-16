<?php
$user = null;
$pass = null;

$numApples = $_POST["appleQuantity"];
$numPears = $_POST["pearQuantity"];
$numPeaches = $_POST["peachQuantity"];
$costOfShipping = "0";
$total = "0";

if (isset($_POST['ship'])) {
  $selec = $_POST['ship'];

  if($selec == "free") {
    $costOfShipping = "0";
  }
  elseif($selec == "fifty") {
    $costOfShipping = "50";
  }
  elseif($selec == "five") {
    $costOfShipping = "5";
  }
}

$total = (($numApples * 1.00)+($numPears * 0.75)+( $numPeaches * 0.50)) + $costOfShipping;


if($_POST["Username"] != null and $_POST["Password"] != null) {
  $user = $_POST["Username"];
  $pass = $_POST["Password"];

}

if(($user != null and $user != "") && ($pass != null and $pass != ""))
{
  echo "<b>RECIEPT</b>" . "<br>";
  echo "Username: " . $user . "<br>";
  echo "Password: " . $pass . "<br>";
  echo "Items Purchased: ". "<br>";
  echo "--" . " Apples: " . $numApples . "<br>";
  echo "--" . " Pears: " . $numPears . "<br>";
  echo "--" . " Peaches: " . $numPeaches . "<br>";
  echo "-------------------------------------" . "<br>";
  echo "--" . "TOTAL: $" . $total . "<br>";


}
else {
  echo "<b>RECIEPT</b>" . "<br>";
  echo "User is undefined" . "<br>";
  echo "Password is undefined" . "<br>";
  echo "Items Purchased: ". "<br>";
  echo "--" . " Apples: " . $numApples . "<br>";
  echo "--" . " Peaches: " . $numPeaches . "<br>";
  echo "-------------------------------------" . "<br>";
  echo "--" . "TOTAL: $" . $total . "<br>";
}
?>
