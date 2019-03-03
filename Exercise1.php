<?php
function product($x, $y) {
  $z = $x * $y;
  return $z;
}

echo "<tr>";
for ($i = 1; $i <= 100; $i++)
{
  echo "<th><b>" . $i . "</b></th>";
}
echo "</tr>";

for ($i = 1; $i <= 100; $i++)
{
  echo "<tr>";
  echo "<th><b>" . $i . "</b></th>";
  for ($j = 1; $j <= 100; $j++)
  {
    echo "<td>" . product($i, $j) . "</td>";
  }
  echo "</tr>";
}

?>
