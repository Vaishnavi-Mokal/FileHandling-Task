<?php
    error_reporting(0);
    if(isset($_POST['sub']))
    {
        $fo=fopen("users/".$email."/details.txt","r");
        $uname=trim(fgets($fo)); // Name
        fgets($fo); //password
        $gender=trim(fgets($fo)); // gender
        $age=trim(fgets($fo)); //age
        $img=trim(fgets($fo)); // ProfileName
        $imgpath="users/$email/$img";
        unlink($imgpath);
        $fname="image-".time()."-".rand().".$ext";

        

        
        file_put_contents("users/$email/details.txt","$uname \n $password \n $gender \n $age \n $fname");

          
          

    }


?>
<!DOCTYPE html>
<html>
    <body>
        <h2>Change Image</h2>
        <input type="file" name="img">
        <input type="submit" name="sub">
    </body>
</html>