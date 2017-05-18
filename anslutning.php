<?php

    $localhost = "localhost";
    $user = "root";
    $password = "root";
    $database = "project";
 
    $conn = new mysqli('localhost', 'root', 'root', 'project');

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);    
    }
    echo"Du är ansluten din lilla jävel";
?>