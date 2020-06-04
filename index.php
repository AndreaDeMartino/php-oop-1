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
      <img src="<?php echo $movie1->logo ?>" alt="Movie 1">
      <div class="card-body">
        <h4 class="card-title display-4"> <?php echo $movie1->titolo ?> </h4>
        <p class="card-text text-muted"> Media Spettatori: <?php echo $movie1->media_spettatori ?> </p>
        <p class="card-text text-muted"> Costo Biglietto: <?php echo $movie1->costo_biglietto ?>€ </p>
        <p class="card-text text-muted"> Genere: <?php echo $movie1->genere ?> </p>
        <p class="card-text text-muted"> L'incasso medio giornaliero è di: <strong><?php echo $movie1->incassiG() ?>€</strong></p>
      </div>
    </div>

    <div class="card">
      <img src="<?php echo $movie2->logo ?>" alt="Movie 1">
      <div class="card-body">
        <h4 class="card-title display-4"> <?php echo $movie2->titolo ?> </h4>
        <p class="card-text text-muted"> Media Spettatori: <?php echo $movie2->media_spettatori ?> </p>
        <p class="card-text text-muted"> Costo Biglietto: <?php echo $movie2->costo_biglietto ?>€ </p>
        <p class="card-text text-muted"> Genere: <?php echo $movie2->genere ?> </p>
        <p class="card-text text-muted"> L'incasso medio giornaliero è di: <strong><?php echo $movie2->incassiG() ?>€</strong></p>
      </div>
    </div>

  </main>
</body>
</html>