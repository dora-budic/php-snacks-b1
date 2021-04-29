<?php

  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $nameLength = strlen($name);
  $mailDot = strpos($mail,'.');
  $mailAt = strpos($mail,'@');
  $ageNumber = is_numeric($age);

  var_dump($nameLength,$mailDot,$mailAt,$ageNumber);

  if ($nameLength > 3 && !($mailDot === false) && !($mailAt === false) && $ageNumber) {
    echo 'Accesso riuscito';
  } else {
    echo 'Accesso negato';
  }

 ?>
