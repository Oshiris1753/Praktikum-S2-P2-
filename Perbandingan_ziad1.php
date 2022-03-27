<?php
$nilai = date("H");

if ($nilai < "10") {
  echo "Sangat Memuaskan";
} elseif ($t < "50") {
  echo "memuaskan";
} elseif ($t < "40") {
  echo "cukup";
} elseif ($t < "30") {
  echo "kurang";
} elseif ($t < "20") {
  echo "sangat kurang";
} else {
  echo "Have a good night!";
}
?>
