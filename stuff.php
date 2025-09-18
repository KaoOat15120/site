<?php

    session_start();

    include("access.php");

    if (isset($_GET['id'])){

        $id = mysqli_real_escape_string($connect,$_GET['id']);
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($connect,$sql);
        $stories = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($connect);

    }

?>


<!DOCTYPE html>
<html>
        <?php include("header.html"); ?>
        <?php include("some.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>