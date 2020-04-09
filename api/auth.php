<?php 

    header('Access-Control-Allow-Origin: http://localhost:4200');
    header('Access-Control-Allow-Methods:  GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Type: application/json');

    $client_info = file_get_contents("bouchons/client_info.json");
    $error = file_get_contents("bouchons/error.json");

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $name = $_GET["stubName"];
        if($name === "customer-info") {
            echo $client_info;
        }
        if ($name === "error") {
            echo $error;
        }
    }

?>