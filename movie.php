<?php
  require_once 'db_config.php';
  require_once 'functions.php';

  if (!isset($_GET['id'])) {
    echo "<h2>No movie selected!</h2>";
    exit;
  }
  $movieId = $_GET['id'];
  $tmdbApiKey = $_ENV['TMDB_API_KEY'];

//------- APIs -----------

  //-- movie api ---
  $movie_url = "https://api.themoviedb.org/3/movie/{$movieId}?api_key=" . $tmdbApiKey;
  $movie = json_decode(file_get_contents($movie_url), true);

  //-- cast api ---
  $credits_url = "https://api.themoviedb.org/3/movie/{$movieId}/credits?api_key=" . $tmdbApiKey;
  $credits = json_decode(file_get_contents($credits_url), true);



  // Check if the movie data is available
  if (!$movie || isset($movie['status_code'])) {
      echo "<h2>Movie not found!</h2>";
      exit;
  }
  $now_playing_movies = fetchMovies('now_playing');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCatch</title>
    <link rel="icon" href="images/CineCatchLogo.png" type="image/png">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    
</head>
<body>
    
    <?php include('includes/nav.php'); ?>

    <!-- Bootstrap 5 JS Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- banner img------------>
    <div class="banner">
      <img src="https://image.tmdb.org/t/p/w500<?= $movie['backdrop_path'] ?>" alt="Banner" class="banner-image">  
    </div>
    <br>

    <!-- movie details container ------------>
    <div class="movie-details">
      <h1><?= $movie['title']?></h1>
      <?php 
        $release_yr= new DateTime($movie['release_date']);
        $year = $release_yr->format('Y');
      ?>
      <p class="year"><?= $year?></p>
      <?php $genreNames = array_map(fn($genre) => $genre["name"], $movie["genres"]);?>
      <?php $genreString = implode(" / ", $genreNames)?>
      <p class="genre"><?= $genreString?></p>
        
          <div class="ratings">
            <?php $imdb_Rating=round($movie['vote_average'],1); ?>
            <span class="imdb-rating">IMDB : <?= $imdb_Rating?>/10</span>
            <span class="rotten-rating">🍅 Vote-count: <?= $movie['vote_count']?></span>
          </div>

        <!-- overview ------------>
          <h2>Overview</h2>
          <p class="about">
            <?= $movie['overview']?>
          </p>

        <!-- Additional infomation ------------>
          <p class="additional-info">
              <strong>Release date : </strong><?= $movie['release_date']?><br>
            <?php 
              $run_time= $movie['runtime']; 
            ?>
              <strong>Run Time : </strong> <?= $run_time ?> min<br>
              <strong>Budget : </strong> $281.4 million<br><!-- guess ---------------------------------->
            <?php 
              $num=$movie['revenue']/1000000;
              $box_office=number_format($num,2);
            ?>
              <strong>Box office : </strong>$ <?= $box_office?> million<br>
              <strong>Status : </strong><?= $movie['status']?><br>
            <?php $proNames = array_map(fn($production) => $production["name"], $movie["production_companies"]);?>
            <?php $proString = implode(" , ", $proNames)?>
              <strong>Production By : </strong><?= $proString ?>
          </p>
        <!-- Top cast ---------------->
          <h2>Top Cast</h2>
          <div class="top-cast">
            <?php $cast = $credits['cast'] ?? []; ?>
            <?php foreach(array_slice($cast,0,6) as $actor): ?>
              <div class="cast-member">
                <img src="<?= $actor['profile_path'] ? 'https://image.tmdb.org/t/p/w200' . $actor['profile_path'] : 'default-profile.png' ?>" alt="<?= $actor['name'] ?>">
                  <p><?= $actor['name']?></p>
              </div>
            <?php endforeach; ?>  
          </div>
      </div>

    </div>
    <!----------------------------------------------->


<br><br><br><br><br><br> 

  <?php include('includes/footer.php'); ?>

  </body>
</html>
  