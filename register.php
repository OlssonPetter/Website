<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ACTIV8</title>
    </head>
    <body>

      <div class"header">
        <a="index.ph">BasicHeader</a>
      </div>

      <h1>Register below</h1>
      <span> or <a href="login.php">login here</a></span>

      <form action="register.php" method="POST" name="myRegForm" onsubmit="return validateRegister()">

        <input type="text" placeholder="Please, enter your email" name="email">
        <input type="text" placeholder="and password" name="password">
        <input type="text" placeholder="confirm password" name="confirm_password">
        <input type="text" placeholder="Please, add some information about yourself" name="info">
        <input type="text" placeholder="Please, enter your sex" name="sex">
        <input type="text" placeholder="Please, enter your age" name="age">

      </form>

    </body>
</html>
