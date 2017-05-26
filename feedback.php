<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
        <link rel="stylesheet" href="projekt.css"/>
        <title>ACTIV8</title>
    
    </head>
    <body>
        
        $friendid = $_GET["userid"];
        
        <form action="friend.php" method="post">
        <p>What do you think about your last workout with this training partner?</p>
        <textarea type ="text" id="feedback" name ="feedback" placeholder = "Please write your feedback here..."> </textarea>
        <p><input id="feedback" type= "submit" value="Leave feedback!" class="button"></p>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="projekt.js" ></script>
    </body>
</html>