<?php

    include("access.php");

    $err = array('errnm'=>'');
    $nm = '';

    if(isset($_POST['submit'])){

        if(empty($_POST['story'])){
            $err['errnm']='Fill the name';
        } else{
            $nm = $_POST['story'];
        }

        if (array_filter($err)){

        } else{

            $nm = mysqli_real_escape_string($connect,$_POST['story']);

            $sql = "DELETE FROM posts WHERE story = '$nm' ";

            if (mysqli_query($connect,$sql)){
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            } else{
                echo 'error';
            }

        }
    }

?>

<!DOCTYPE html>
<html>
        <?php include("header.html"); ?>
        <?php include("formdelete.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>