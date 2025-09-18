<?php

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
        <?php include("content.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>