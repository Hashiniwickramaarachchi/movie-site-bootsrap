<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCatch</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
            <p class="text-secondary">Upcomming Movies</p>         
        </div>

<!-- Movie Grid Carousel -->
<div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- First carousel item (active) -->
    <div class="carousel-item active">
      <div class="d-flex flex-wrap justify-content-center">
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
      </div>
    </div>

    <!-- Second carousel item -->
    <div class="carousel-item">
      <div class="d-flex flex-wrap justify-content-center">
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
      </div>
    </div>

    <!-- Third carousel item -->
    <div class="carousel-item">
      <div class="d-flex flex-wrap justify-content-center">
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
      </div>
    </div>

    <!-- Fourth carousel item -->
    <div class="carousel-item">
      <div class="d-flex flex-wrap justify-content-center">
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 col-6 col-sm-4 col-md-2 text-center">
          <img src="images/medium-cover (6).jpg" class="img-fluid" alt="" style="width: 150px; height: 150px;">
        </div>
      </div>
    </div>
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
    <!-- Card 1 -->
    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <a href="movie.php">
          <img src="images/medium-cover (1).jpg" class="card-img-top" alt="Red One">
        </a>
        <div class="card-body">
          <h5 class="card-title">Red One</h5>
          <p class="card-text">2024</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <a href="movie.php">
          <img src="images/medium-cover (2).jpg" class="card-img-top" alt="Gladiator II">
        </a>
        <div class="card-body">
          <h5 class="card-title">Gladiator II</h5>
          <p class="card-text">2024</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <a href="movie.php">
          <img src="images/medium-cover (3).jpg" class="card-img-top" alt="Venom The Last Dance">
        </a>
        <div class="card-body">
          <h5 class="card-title">Venom The Last Dance</h5>
          <p class="card-text">2024</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <a href="movie.php">
          <img src="images/medium-cover (4).jpg" class="card-img-top" alt="Transformers One">
        </a>
        <div class="card-body">
          <h5 class="card-title">Transformers One</h5>
          <p class="card-text">2024</p>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <a href="movie.php">
          <img src="images/medium-cover (5).jpg" class="card-img-top" alt="Your Fault">
        </a>
        <div class="card-body">
          <h5 class="card-title">Your Fault</h5>
          <p class="card-text">2024</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- C O N T A C T  U S ----------->
  <?php include('includes/contactUs.php'); ?>

<br><br>

<!-- F O O T E R - ---------------->
  <?php include('includes/footer.php'); ?>

</body>
</html>
