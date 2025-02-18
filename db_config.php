<?php

    require __DIR__ . '/vendor/autoload.php';


    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    //TMDB api key
    define('TMDB_API_KEY',$_ENV['TMDB_API_KEY']);

    //mysql db
    define('DB_HOST', $_ENV['DB_HOST']);
    define('DB_NAME', $_ENV['DB_NAME']);
    define('DB_USERNAME', $_ENV['DB_USERNAME']);
    define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

    try {
        $conn = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
            DB_USERNAME,
            DB_PASSWORD
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection Failed: " . $e->getMessage());
    }

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "cine_catch";

    $conn_cine = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$conn_cine){
        die("Connection to cine_catch failed: " . mysqli_error($conn_cine));
    }

?>