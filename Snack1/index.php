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
