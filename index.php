<?php
  require_once 'functions.php';

  $upcoming_movies = fetchMovies('upcoming');
  $now_playing_movies = fetchMovies('now_playing');
  $latest_movies = fetchMovies('latest');

  //set limits for upcoming movie
  $upcoming_movies = array_slice($upcoming_movies, 0, 20);
  //empty($upcoming_movies) && 
  if(empty($upcoming_movies) && empty($now_playing_movies)){
    $message = 'No movies found.';
  } else {
    $message =null;
  }
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

    <!--carusel-->
    
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.jpg" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="images/banner 2.jpg" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="images/banner 3.jpg" class="d-block w-100" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
   

      <!--card set no1-->
      <div class="container">
        <div class="row">
            <p class="text-secondary">Upcoming Movies</p>         
        </div>
      </div>

<!-- Movie Grid Carousel -->
<div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Create carousel items (5 cards per item) -->
      <?php 
        $piece = array_chunk($upcoming_movies, 5);  // Split movies into chunks of 5
        foreach ($piece as $index => $moviesPiece): 
        $activeClass = ($index === 0) ? ' active' : ''; // Make the first item active 
      ?>
            <!-- First carousel item (active) -->
            <div class="carousel-item <?= $activeClass ?>">
              <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($moviesPiece as $movie): ?>
                    <!-- Loop through movies and display them -->
                        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
                          <img src="https://image.tmdb.org/t/p/w500<?= $movie['poster_path'] ?>" class="img-fluid" alt="<?= $movie['title'] ?>" style="width: 175px; height: 250px;">
                        </div>
                <?php endforeach; ?>
              </div>
            </div>
      <?php endforeach; ?>
    </div>

      <!-- Left Controller -->
      <a class="carousel-control-prev" href="#movieCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>

      <!-- Right Controller -->
      <a class="carousel-control-next" href="#movieCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
  </div>

<br><br>

<!--movie card-->
  
  <div class="container mt-4">
    <p class="text-secondary">Latest Movies</p> 
      <div class="row card-container">
        <!--error msg no movies-->
        <?php if ($message): ?>
            <div class="col-12">
                  <div class="alert alert-warning"><?= $message ?></div>
            </div>
        <?php else: ?>
          <!-- Loop through movies and display them -->
            <?php foreach ($now_playing_movies as $movie): ?>
                <!-- Card 1 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                  <div class="card">
                    <a href="movie.php ? id=<?= $movie['id'] ?>">
                      <!-- movie poster -->
                      <img src="https://image.tmdb.org/t/p/w500<?= $movie['poster_path'] ?>" class="card-img-top" alt="<?php $movie['title'] ?>">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $movie['title'] ?></h5>
                      <p class="card-text"><?= $movie['release_date']?></p> 
                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
      </div>
  </div>


<!-- F O O T E R - ---------------->
  <?php include('includes/footer.php'); ?>

</body>
</html>