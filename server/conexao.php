<?php
$servername = "localhost";
$username = "u349811508_will";
$password = "171808#Database@1996";
$dbname = "u349811508_solid";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
	die;
    }
?>