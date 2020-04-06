<?php 

    header('Access-Control-Allow-Origin: http://localhost:4200');
    header('Access-Control-Allow-Methods:  GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Type: application/json');
    
    $client_info = file_get_contents("client_info.json");
    $test2 = file_get_contents("test2.json");

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $name = $_GET["name"];
        if($name === "client_info") {
            echo $client_info;
        }
    }

?>