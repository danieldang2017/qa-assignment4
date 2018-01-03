<?php
    include("DatabaseConnection.php");
    
    $sqlQuery = $mySQLConnection->prepare("SELECT * FROM Info");
    $sqlQuery->execute();
    $response = $sqlQuery->fetchAll();
    
    echo json_encode($response);
    header("Content-type:application/json");
?>