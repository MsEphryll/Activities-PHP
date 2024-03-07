<?php
$numStars = 6;

for ($i = 1; $i <= $numStars; $i++) {
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  echo "\n";
}

for ($i = $numStars; $i > 0; $i--){
  for($j = 0; $j < $i; $j++) {
    echo "*";
  }
  echo "\n";
}

?>