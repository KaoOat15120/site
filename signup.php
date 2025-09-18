<?php

    include("access.php");

    $err = array('errun'=>'','errpw'=>'');
    $un = $pw = '';

    if(isset($_POST['submit'])){

        if(empty($_POST['username'])){
            $err['errun']='Fill the username';
        } else{
            $un = $_POST['username'];
        }

        if(empty($_POST['password'])){
            $err['errpw']='Fill the password';
        } else{
            $pw = $_POST['password'];
        }

        if (array_filter($err)){

        } else{

            $un = mysqli_real_escape_string($connect,$_POST['username']);
            $pw = mysqli_real_escape_string($connect,$_POST['password']);

            $sql = "INSERT INTO people(firstname,passcode) VALUES('$un','$pw')";

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
        <?php include("formsignup.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>