<?php
    session_start();

    $role = $_SESSION['userrole'];
    if(!isset($_SESSION['userrole']) || $role!="admin")
    {
      header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1>Welcome Admin!</h1>
  </body>
</html>
