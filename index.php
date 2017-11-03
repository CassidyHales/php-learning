<?php

$person = [
  'age' => 20,
  'hair' => 'brown',
  'position' => 'web developer'
];

$person['name'] = 'Cassidy';

unset($person['age']);


require 'index.view.php';