<?php

require_once __DIR__ . '/Model/Movie.php';

$harryPotter = new Movie('Harry Potter e la pietra filosofale', 2001, ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint'], 'en');

var_dump($harryPotter)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>

<body>

  <div class="container">
    <h1>Movies</h1>
    <div class="container">
      <div class="movie-info">
        <h3><?php $harryPotter->getFullInfo() ?></h3>
        <h4>Cast :</h4>
        <ul>
          <?php foreach ($harryPotter->cast as $actor) : ?>
            <li>
              <?php echo $actor ?>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>