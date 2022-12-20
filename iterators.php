<?php
for($i = 0; $i <=5; $i++){

   echo $i; 
}
echo "<br><br>";

$colors = array("blue", "green", "red", "brown");

foreach ($colors as $value) {
  echo "$value <br>";
}

$x = 0;

while($x <= 100) {
echo "The number is: $x <br>";
$x+=10;
}

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

?>