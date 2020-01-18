<?php

echo "<hr>";

for ($i = 1; $i <= 8; $i++) {

  for ($j = 1; $j <= 8; $j++) {
    if ($i == 1 or $i == 8) {

      echo "+";
    } else {

      if ($j == 1 or $j == 7) {
        echo "=";
      } else {

        if ($j == 5) {
          echo "=";
        } else if ($j == 6) {
          echo "+";
        } else if ($j == 2) {
          echo "=";
        } else if ($j == 3) {
          echo "+";
        } else if ($j == 8) {
          echo "=";
        } else {
          echo "=";
        }
      }
    }
  }

  echo "<br>";
}
