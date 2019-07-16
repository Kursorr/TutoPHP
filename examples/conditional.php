<?php

// Have fun with this 2 variables :
$a = 5;
$b = 6;

if ($a > $b) {
  echo 'a est plus grand que b';
} elseif ($a == $b) {
  echo 'a est égal à b';
} else {
  echo 'a est plus petit que b';
}

// Have fun with this variable :
$i = 0;

switch ($i) {
  case 0:
    echo "\n" . 'i égal 0';
    break;
  case 1:
    echo "\n" . 'i égal 1';
    break;
  case 2:
    echo "\n" . 'i égal 2';
    break;
}
?>