<?php
    session_start();

    require 'anslutning.php';

    $role = $_SESSION['userrole'];
    if(!isset($_SESSION['userrole']) || $role!="admin")
    {
      header('Location: index.php');
    }

    $victim = $_SESSION['victim'];
    echo"$victim";

    $sql = "DELETE FROM User WHERE email='$victim'";

    if (mysqli_query($con, $sql))
    {
      echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

    header('Location: delete.php');

?>
