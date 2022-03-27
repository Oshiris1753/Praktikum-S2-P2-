<?php
$nilai = "A";

switch ($nilai) {
  case "I":
    echo "Tidak ada";
    break;
  case "A":
    echo "sangat memuaskan ";
    break;
  case "B":
    echo "Memuaskan";
  case "C":
    echo "Cukup";
  case "D":
    echo "Kurang";
  case "E":
    echo "Sangat kurang";
    break;
  default:
    echo "Your favorite color is neither I,A,B,C,D nor E";
}
?>
