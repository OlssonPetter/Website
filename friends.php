<?php

session_start();

if(!isset($_SESSION['user']))
{
  header("Location:index.php");
}
?>

!<!DOCTYPE html>
<html>
<head>
  <title> ACTIV8 </title>
    <meta charset="utf-8">
    <h1> Here are your friends!<h1>
</head>
<body>
</body>
  <link rel="stylesheet" href="projekt.css"/>
</html>
