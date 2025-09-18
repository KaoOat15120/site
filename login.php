<?php

    session_start();
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

            $sql = "SELECT * FROM people WHERE firstname = '$un' and passcode = '$pw'";
            $objquery = mysqli_query($connect,$sql);
            $objresult = mysqli_fetch_array($objquery);

            if ($objresult){

                $_SESSION['loggedin'] = true;
                $_SESSION['firstname'] = $objresult['firstname'];
                $_SESSION['status'] = $objresult['status'];

                session_write_close();

                if ($objresult['status']=="owner"){
                    echo "<script type='text/javascript'> document.location = 'adminpage.php'; </script>";
                } else{
                    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                }

            } else{
                echo 'error';
            }

        }
    }

?>

<!DOCTYPE html>
<html>
        <?php include("header.html"); ?>
        <?php include("formlogin.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>