<?php

  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
  ];

  extract($arr);

  echo "$cor <br>";
  echo "$forma <br>";
  echo "$material <br>";

$nome = "Waleriano";

$pessoa = [
  'nome' => 'José',
  'idade'=> 23
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";