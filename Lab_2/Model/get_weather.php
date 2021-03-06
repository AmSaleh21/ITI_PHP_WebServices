<?php

// require_once("../vendor/autoload.php");

spl_autoload_register(function ($class) {
    include "$class.php";
});
if (isset($_GET['lat']) && isset($_GET['lon'])) {
    echo GruzzleWeather::get_weather($_GET['lat'], $_GET['lon']);
} else {
    echo json_encode([
        'status' => 401,
        'message' => "Invalid Request"
    ]);
}
