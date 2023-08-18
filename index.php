<?php
$cost = $_GET["cost"];
$exchange = $_GET["exchange"];

if ($exchange == $cost) {
  echo "No exchange needed";
} else if ($exchange > $cost) {
    echo "The exchange is: " . ($exchange - $cost) . "€";
} else if ($exchange < $cost) {
    echo "The Costumer needs to give you ". ($cost - $exchange) ."€ more";
} else {
    echo "No Input is given";
}
?>
<br>
<form method="get" action="index.html">
    <input type="submit">
</form>