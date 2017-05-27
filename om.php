<?php

require 'anslutning.php';

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>ACTIV8</title>
  <meta charset="utf-8">
<div class="container">
    <a href="index.php">ACTIV8</a>
    <a href="about.php">Terms</a>
    <a href="om.php">About</a>
</div>
</head>
  <body>
    <?php if (!isset($_SESSION['user'])):  ?>
    <form id="terms_form">
      <h1> About</h1>
      <p> Our e-service strives to help our customers build relations with other training partners that share the same sport interest.</p>
      <p> We hope you enjoy your stay!</p>
      <p> From your friends at team ACTIV8</p>
      <p> Oskar Landén, Erik Lidén and Petter Olsson</p>
      <p>Sign up here!<p>
        <p><a href="register.php" class="button">Register</a>.</p>
    </form>
    <?php else: ?>
      <form id="terms_form">
        <h1> About</h1>
        <p> Our e-service strives to help our customers build relations with other training partners that share the same sport interest.</p>
        <p> We hope you enjoy your stay!</p>
        <p> From your friends at team ACTIV8</p>
        <p> Oskar Landén, Erik Lidén and Petter Olsson</p>
        <?php endif; ?>
  </body>
  <link rel="stylesheet" href="projekt.css"/>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="projekt.js" ></script>
  </html>
