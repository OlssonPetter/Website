<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <?php
        
        
    ?>
        <div class="booking">
        <form name="MyRegForm" id="MyRegForm" action="profile.php"method="post">
        <input type="password" placeholder="Enter your new password..." name="password_edit">
        <input placeholder="Add som information about yourself..."name="info_edit">
        <p> Choose gender </p>
         <select name="sex_edit">
     <option value="male"selected="">Male</option>
     <option value="female">Female</option>
   </select>
        <input placeholder="Enter your age..."name= "age_edit">
       <p> What sport are you interested in? </p>
        <select name="sport_edit">
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="running" selected>Running</option>
        <option value="gym">Gym</option>
        </select>
        <input id="button_register" type= "submit" value="Save changes!">        
        </form>
        </div>
        <div class="booking">
            <form name="picture_edit" id="picture_edit" action="profile.php">
            <input type="file" name="pic" accept="image">
            <input type="submit" class="button">     
        </form>
        </div>
    </body>
    <link rel="stylesheet" href="projekt.css"/>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="projekt.js" ></script>
</html>