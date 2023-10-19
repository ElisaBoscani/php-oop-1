<?php
include __DIR__ . "/script.php";

include __DIR__ . "/Models/db.php";

include __DIR__ . "/Models/db_due.php";


$arrayFilm = [$film_uno, $film_due];




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div>
    <?php foreach ($arrayFilm as $film) : ?>
      <ul>
        <li><?php echo $film->name; ?></li>
        <?php foreach ($film->genre as $type) : ?>
          <li><?php echo $type; ?></li>
        <?php endforeach; ?>
        <li><?php echo $film->stars; ?></li>

      </ul>
    <?php endforeach; ?>
  </div>
</body>

</html>