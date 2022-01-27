<?php
session_start();
$sid=$_SESSION['age'];
if(empty($sid))
{
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
    <body> 
        <h3><?php echo $sid;?></h3>
        
        The Age is :<h3> <?php echo $_COOKIE['age'];?></h3>
      


    </body>
</html>