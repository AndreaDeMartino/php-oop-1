<?php
  // Richiamo Classe Movie
  include __DIR__ . '/movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style/main.css">
  <title>OOP Movies</title>
</head>
<body>
  
  <!-- Header -->
  <header class="main-header">
    <nav class="navbar navbar-light bg-dark">
      <a class="navbar-brand text-white">OOP Movies</a>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </header>

  <!-- Main -->
  <main class="main-content pt-1 bg-secondary">

    <div class="card">
      <?php $movie1->incassiG() ?>
    </div>

    <div class="card">
      <?php $movie2->incassiG() ?>
    </div>

  </main>
</body>
</html>