<?php
    include("DatabaseConnection.php");
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    
    $sqlQuery = $mySQLConnection->prepare("INSERT INTO Info(name, address, city, phone, email, make, model, year) VALUES ('$name', '$address', '$city', '$phone', '$email', '$make', '$model', $year);");
    try {
        $sqlQuery->execute();
    } catch (Exception $e) {
        $e->getMessage();
    }
    $sqlQuery = $mySQLConnection->prepare("SELECT MAX(ID) FROM Info");
    $sqlQuery->execute();
    $response = $sqlQuery->fetchAll();
    
    echo json_encode($response);
    header("Content-type:application/json");
?>