<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->

<style>
<?php include './master.css'; ?>
</style>

<?php
  $posts = [
    '24/03/2021' => [
      [
        'title' => 'Why I love Italy – my favourite Italy experiences and places',
        'author' => 'Dan Flying Solo',
        'text' => 'Italy has become one of my favourite countries, and here are some of my favourite Italy experiences from over the years.'
      ],
      [
        'title' => '8 Unique Things To Do In Honolulu At Night',
        'author' => 'A Broken Backpack',
        'text' => 'Honolulu is not just the capital of Hawaii. It’s home to most of Oahu’s population and is a thriving cosmopolitan city that attracts over 9 million tourists each year.'
      ],
    ],
    '25/01/2020' => [
      [
        'title' => 'Renaissance, Romance and Ragù: three days in beautiful Bologna',
        'author' => 'Dan Flying Solo',
        'text' => 'Whether you spend a long weekend in Bologna or use it as a base to explore the Emilia Romagna region, you’ll be hard pushed not to fall for its beauty.'
      ],
      [
        'title' => '10 Best Things to do in French Polynesia for Adventurers',
        'author' => 'My Life’s A Movie',
        'text' => 'French Polynesia was always at the top of my list to travel to because of the fact that it’s a string of mountainous jungle islands in the middle the ocean.'
      ],
    ],
    '04/05/2016' => [
      [
        'title' => 'Burnouts and new beginnings – Searching myself in Cinque Terre, Italy',
        'author' => 'Lili’s Travel Plans',
        'text' => 'Italy has become one of my favourite countries, and here are some of my favourite Italy experiences from over the years.'
      ],
    ],
  ];

  $dates = array_keys($posts);
?>

<ul>
  <?php for ($i=0; $i < count($posts); $i++) {
    $currentPosts = array_values($posts[$dates[$i]]); ?>

  <li>
    <h3>
      <?= $dates[$i] ?>
    </h3>

    <ol>

      <?php for ($j=0; $j < count($posts[$dates[$i]]); $j++) { ?>
      <li>
        <span>Title: <?= $currentPosts[$j]['title'] ?></span><br>
        <span>Author: <?= $currentPosts[$j]['author'] ?></span><br>
        <span>Text: <?= $currentPosts[$j]['text'] ?></span>
      </li>
      <?php  } ?>

    </ol>
  </li>
  <?php } ?>
</ul>
