<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

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
