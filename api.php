/<?php
    require __DIR__ . '/vendor/autoload.php';  // Include the autoloader for Composer

    // Load environment variables from .env file
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    // Fetch the TMDB API key from the .env file
    $tmdbApiKey = $_ENV['TMDB_API_KEY'];
    
    // Define the TMDB API endpoint for upcoming movies
    $endpoint = "https://api.themoviedb.org/3/movie/upcoming?api_key=" . $tmdbApiKey;
    
    // Make the API request to fetch upcoming movies
    $response = file_get_contents($endpoint);
    
    // Check if the response is valid
    if ($response === FALSE) {
        echo json_encode(["error" => "Error fetching data from TMDB API."]);
    } else {
        // Decode the JSON response into a PHP array
        $data = json_decode($response, true);
    
        // Send a JSON response to the client
        header('Content-Type: application/json');
        echo json_encode($data);
    }


/*
    require "db_config.php";

    $endpoint = "https://api.themoviedb.org/3/movie/upcoming" . TMDB_API_KEY;
    $response = file_get_contents($endpoint);
    $data = json_decode($response, true);

    header('Content-Type: application/json');
    echo json_encode($data);
*/
?>