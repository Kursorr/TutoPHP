<?php
  function add (int $a, int $b) {
    return $a + $b;
  }

  var_dump(add(5, 5));

  // use of functions

  $insults = ['damn', 'shit'];
  $asterisk = [];

  foreach ($insults as $insult) {
    $asterisk[] = str_repeat('*', strlen($insult));
  }

  $paragraph = readline('Enter a paragraph: ');
  $paragraph = str_replace($insults, $asterisk, $paragraph);

  echo $paragraph;
?>