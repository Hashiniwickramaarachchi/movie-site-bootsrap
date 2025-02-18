<?php
    require_once 'db_config.php';

    function fetchMovies($endpoint){
        $tmdbApiKey = $_ENV['TMDB_API_KEY'];
        $api_url = "https://api.themoviedb.org/3/movie/{$endpoint}?api_key=" . $tmdbApiKey;

        $response = file_get_contents($api_url);
        $data = json_decode($response, true);

        return $data['results'] ?? [];
    }

?>