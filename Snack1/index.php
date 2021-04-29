<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
  $partite = [
    [
      'squadraCasa' => 'Brindisi',
      'squadraOspite' => 'Sassari',
      'puntiCasa' => 20,
      'puntiOspite' => 14
    ],
    [
      'squadraCasa' => 'Brescia',
      'squadraOspite' => 'Pesaro',
      'puntiCasa' => 32,
      'puntiOspite' => 40
    ],
    [
      'squadraCasa' => 'Olimpia Milano',
      'squadraOspite' => 'Cantù',
      'puntiCasa' => 55,
      'puntiOspite' => 60
    ],
  ];

  for ($i=0; $i < count($partite); $i++) {
    ?>

    <div>
      <?= $partite[$i]['squadraCasa'] ?> -
      <?= $partite[$i]['squadraOspite'] ?> |
      <?= $partite[$i]['puntiCasa'] ?> -
      <?= $partite[$i]['puntiOspite'] ?>
    </div>

  <?php }

 ?>
