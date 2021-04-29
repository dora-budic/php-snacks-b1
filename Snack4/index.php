<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
  $students = [
    [
      'name' => 'Dora',
      'surname' => 'Budić',
      'grades' => [
        'math' => 3,
        'biology' => 4,
        'english' => 5
      ]
    ],
    [
      'name' => 'Luca',
      'surname' => 'De Felice',
      'grades' => [
        'math' => 5,
        'biology' => 4,
        'english' => 2
      ]
    ],
    [
      'name' => 'Olga',
      'surname' => 'Tanasov',
      'grades' => [
        'math' => 2,
        'biology' => 4,
        'english' => 3
      ]
    ],
  ];

  for ($i=0; $i < count($students); $i++) {
    $subjects = array_values($students[$i]['grades']);
    $sum = 0;
    for ($j=0; $j < count($subjects); $j++) {
      $sum += $subjects[$j];
      $average = round($sum / count($subjects),2);
    } ?>

    <div>
      <h3>
        <?= $students[$i]['name'] ?>
        <?= $students[$i]['surname'] ?>
      </h3>
      <span>Vote average: <?= $average ?></span>
    </div>

<?php  }

 ?>
