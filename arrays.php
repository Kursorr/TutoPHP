<?php
  $eleve = [
    'name' => 'DOE',
    'surname' => 'Marc',
    'notes' => [10, 12, 14, 18, 20, 9]
  ];

  echo $eleve['name'] . ' ' . $eleve['surname'] . ' get: ' . $eleve['notes'][0] . ', ' . $eleve['notes'][1] . ' etc...';

  $classe = [
    [
      'name' => 'DOE',
      'surname' => 'Marc',
      'notes' => [10, 12, 14, 18, 20, 9]
    ],
    [
      'name' => 'FOO',
      'surname' => 'Bar',
      'notes' => [5, 12, 16, 8, 0, 14]
    ]
  ];

  echo "\n" . $classe[0]['name'] . ' ' . $classe[1]['name']
?>