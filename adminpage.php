<?php

    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['status'] != 'owner'){
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }

    include("access.php");

    $sql = "SELECT * from posts ORDER BY upload DESC";
    $result = mysqli_query($connect,$sql);
    $stories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($connect);

?>


<!DOCTYPE html>
<html>
        <?php include("header.html"); ?>
        <?php include("contentadmin.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>