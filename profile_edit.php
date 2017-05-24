<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <?php
        
        
    ?>
        <form name="MyRegForm" id="MyRegForm" action="profile.php"method="post">
        <input placeholder="Enter your email..."name="email_edit">
        <input type="password" placeholder="Enter your password..." name="password_edit">
        <input placeholder="Add som information about yourself..."name="info_edit">
        <p> Choose gender </p>
         <select name="sex_edit">
     <option value="male"selected="">Male</option>
     <option value="female">Female</option>
   </select>
        <input placeholder="Enter your age..."name= "age_edi">
       <p> What sport are you interested in? </p>
        <select name="sport_edit">
        <option value="football">Football</option>
        <option value="tennis">Tennis</option>
        <option value="running" selected>Running</option>
        <option value="gym">Gym</option>
        </select>
        <input id="button_register" type= "submit" value="Save changes!">
        
        </form>
    </body>
<link rel="stylesheet" href="projekt.css"/>
</html>