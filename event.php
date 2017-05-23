<?php
session_start();

require'anslutning.php';

    $event_name =mysqli_real_escape_string($con,$_POST['event_name']);
    $event_info =mysqli_real_escape_string($con,$_POST['event_info']);
    $event_location =mysqli_real_escape_string($con,$_POST['event_location']);

    if(!empty($_POST['event_name'])|| !empty($_POST['event_info'])|| !empty($_POST['event_location']))
    {
        $sql="INSERT INTO Event VALUES('','$event_name','$event_info','$event_location')";
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
    <div class="container">
  <a href="#home">Profile</a>
  <a href="#news">Friends</a>
  <div class="dropdown">
    <button class="dropbtn">Events</button>
    <div class="dropdown-content">
      <a href="#">Create event</a>
      <a href="#">Find event</a>
    </div>
  </div> 
  <a href="#Booking"></a>
</div>
    </head>
<body>
    <a href="create_event.php" class="button" type="button" >+</a>
<div class="opt"></div>
<ul id="feed"></ul>
<div 
     style="font-size: 12px;  
        text-align: center;  
        color: #666;  
        background:rgba(0,0,0,0.8);    
        max-width: 100%; width: 100vw;   
        opacity: 0.9;
        padding:5px 0;">
</div>
</body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>

</html>