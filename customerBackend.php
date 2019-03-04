<?php

function add($x, $y, $h, $t) {
  $z = $x + $y + $h + $t;
  return $z;
}

function multiply($x, $y) {
  $z = $x * $y;
  return $z;
}

function method($ship) {
  if ($ship == 0) return "7-day Shipping";
  else if ($ship == 5) return "3-day Shipping";
  else return "Overnight Shipping";
}

$total1 = multiply($_POST["quantity1"], 100);
$total2 = multiply($_POST["quantity2"], 80);
$total3 = multiply($_POST["quantity3"], 10);

echo "<h1>Welcome, " . $_POST["email"] . " (" . $_POST["pass"] . ")!</h1>";

echo "<h1>Receipt</h1>";

echo "<table style='border:1px solid black;'>";

echo "<tr><th style='border:1px solid black;'></th><th style='border:1px solid black;'><b> Quantity </b></th><th style='border:1px solid black;'><b>Cost Per Item</b></th><th style='border:1px solid black;'><b>Sub Total</b></th></tr>";
echo "<tr><th style='border:1px solid black;'><b> Spokane </b></th><td style='border:1px solid black;'>" . $_POST["quantity1"] . "</td><td style='border:1px solid black;'> $100 </td><td style='border:1px solid black;'>$" . $total1 . "</td></tr>";
echo "<tr><th style='border:1px solid black;'><b> Walrus </b></th><td style='border:1px solid black;'>" . $_POST["quantity2"] . "</td><td style='border:1px solid black;'> $80 </td><td style='border:1px solid black;'>$" . $total2 . "</td></tr>";
echo "<tr><th style='border:1px solid black;'><b> Spaghetti </b></th><td style='border:1px solid black;'>" . $_POST["quantity3"] . "</td><td style='border:1px solid black;'> $10 </td><td style='border:1px solid black;'>$" . $total3 . "</td></tr>";
echo "<tr><th style='border:1px solid black;'><b> Shipping </b></th><td colspan='2' style='border:1px solid black;'>" . method($_POST["shipping"]) . "</td><td style='border:1px solid black;'>$" . $_POST["shipping"] . "</td></tr>";
echo "<tr><th colspan='3' style='border:1px solid black;'><b> Total Cost </b></th><th style='border:1px solid black;'><b>$" . add($total1, $total2, $total3, $_POST["shipping"]) . "</b></th></tr>";

echo "</table>";

?>
