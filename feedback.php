<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
        <link rel="stylesheet" href="projekt.css"/>
        <title>ACTIV8</title>
    
    </head>
    <body>
                <div class="container">
          <a href="logout.php">Logout</a>
          <a href="index.php">ACTIV8</a>
          <a href="profile.php">Profile</a>
          <a href="event.php">Events</a>
          <a href="booking.php">Booking</a>
          <a href="om.php">About</a>
          <a href="friends.php">Training Partners</a>
        </div>
        
        
        <form action="friend.php" method="post">
        <p>What do you think about your last workout with this training partner?</p>
        <textarea type ="text" id="feedback" name ="feedback" placeholder = "Please write your feedback here..."> </textarea>
        <p><input id="feedback" type= "submit" value="Leave feedback!" class="button"></p>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="projekt.js" ></script>
    </body>
</html>