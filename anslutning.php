<?php

    $localhost = "localhost";
    $user = "root";
    $password = "root";
    $database = "project";
 
    $con = new mysqli('localhost', 'root', 'root', 'project');

    if ($con->connect_error) 
    {
        die("Connection failed: " . $con->connect_error);    
    }
    echo"Du är ansluten din lilla jävel";
?>