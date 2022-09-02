<?php 
$int = 15;

for ($i=1; $i <= $int; $i++) { 
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "EduWork";
  } else if ($i % 3 == 0) {
    echo "Edu";
  } else if ($i % 5 == 0) {
    echo "Work";
  } else {
    echo $i;
  }
}

 ?>