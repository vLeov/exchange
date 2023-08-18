<?php
$cost = $_POST["cost"];
$exchange = $_POST["exchange"];

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
<form method="post" action="index.html">
    <input type="submit">
</form>