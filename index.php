<?php
include __DIR__ . "/script.php";

include __DIR__ . "/Models/db.php";

include __DIR__ . "/Models/db_due.php";
include __DIR__ . "/Models/db_tre.php";

$arrayFilm = [$film_uno, $film_due, $film_tre];




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <h1 class="text-center m-3 ">Film</h1>
  <div class="container">

    <div class="row g-3 ">
      <?php foreach ($arrayFilm as $film) : ?>
        <div class="col">
          <div class=" bg_header h-100 d-flex flex-column align-items-center p-3 card" style="width: 18rem;">
            <img src=" <?php echo $film->img; ?>" class="card-img-top w-75 pb-2" alt="...">
            <div class="card-body p-1 d-flex flex-column align-items-center ">
              <h5 class="card-text "><?php echo $film->name; ?></h5>
              <span><?php echo $film->direction; ?></span>

              <span><?php foreach ($film->genre as $type) : ?>
                  <span><?php echo $type; ?></span>
                <?php endforeach; ?>
              </span>
              <span><?php echo $film->stars; ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>


  </div>
</body>

</html>