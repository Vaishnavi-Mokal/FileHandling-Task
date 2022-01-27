<?php
session_start();
$sid=$_SESSION['name'];
$fo=fopen("users/$email/details.txt","r");

?>

<!DOCTYPE html>
<html>
    <body> 
     <h3> <?php echo "<h2>Name is".fgets($fo);"</h2>"?></h3>
    

    </body>
</html>