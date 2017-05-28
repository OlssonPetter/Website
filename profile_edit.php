<?php

session_start();

if(!isset($_SESSION['user']))
{
  header("Location:index.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
      <div class="container">
        <a href="logout.php">Logout</a>
        <a href="index.php">ACTIV8</a>
        <a href="profile.php">Profile</a>
        <a href="event.php">Events</a>
        <a href="booking.php">Booking</a>
        <a href="om.php">About</a>
        <a href="friends.php">Friends</a>
      </div>
    </head>
    <body>
      <h1 class="title_h1"> You can update your profile information here:</h1>
    <?php


    ?>
        <div class="booking">
        <form name="MyRegForm" id="MyProfileRegForm" action="profile.php"method="post">
          <p> Update password</p>
        <p><input type="password" placeholder="Enter your new password..." name="password_edit"></p>
        <p> Update your profile information</p>
        <input placeholder="Add some information about yourself..."name="info_edit">
        <p> Choose gender </p>
         <p><select name="sex_edit">
     <option value="male"selected="">Male</option>
     <option value="female">Female</option>
     <option value="other">Other</option>
   </select></p>
        <p><input placeholder="Enter your age..."name= "age_edit"></p>
       <p> What sport are you interested in? </p>
        <select name="sport_edit">
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="running" selected>Running</option>
        <option value="gym">Gym</option>
        <option value="golf">Golf</option>
        <option value="swimming">Swimming</option>
        <option value="rugby">Rugby</option>
        <option value="chess">Chess</option>
        <option value="athletics">Athletics</option>
        <option value="baseball">Baseball</option>
        <option value="frisbee">Frisbee</option>
        </select>
        <p><input id="button_register" type= "submit" value="Save changes!" class="button"></p>
        </form>
        </div>
        <div class="booking">
               <form method="post" action="profile.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <p>Upload profile picture</p>
            <div>
                <input type="submit" name="upload" value="Upload Image">
            </div>
        </form>
            
        </div>
    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>
