<?php

    include("access.php");

    $err = array('errnm'=>'','errsm'=>'','errpt'=>'');
    $nm = $sm = $pt = '';

    if(isset($_POST['submit'])){

        if(empty($_POST['story'])){
            $err['errnm']='Fill the name';
        } else{
            $nm = $_POST['story'];
        }

        if(empty($_POST['summary'])){
            $err['errsm']='Fill the summary';
        } else{
            $sm = $_POST['summary'];
        }

        if(empty($_POST['plot'])){
            $err['errpt']='Fill the plot';
        } else{
            $pt = $_POST['plot'];
        }

        if (array_filter($err)){

        } else{

            $nm = mysqli_real_escape_string($connect,$_POST['story']);
            $sm = mysqli_real_escape_string($connect,$_POST['summary']);
            $pt = mysqli_real_escape_string($connect,$_POST['plot']);

            $sql = "INSERT INTO posts(story,summary,plot) VALUES('$nm','$sm','$pt')";

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
        <?php include("formadd.php"); ?>
        <?php include("footer.html"); ?>
    </body>
</html>