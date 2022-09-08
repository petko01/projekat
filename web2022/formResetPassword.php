<?php

if(isset($_GET['email'])){

    $e=$_GET['email'];
    echo '
<!DOCTYPE html>
<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div class="box2">
     <form id="form" method="POST" action="formResetPassword.php?email='.$e.'">
       <div class="form2">
        <input type="password" class="form-input" name="password1" placeholder="Password" required><br>
        <input type="password" class="form-input" name="password2" placeholder="Confirm Password" required><br>
        <input type="submit" id="form-submit" name="submit" value="Change password"><br>
        ';
    if(isset($_POST['submit'])){

        $email=$_GET['email'];

        if($_POST['password1']==$_POST['password2']){

            require_once ('db_config.php');
            $update="UPDATE users SET password=? WHERE email=? LIMIT 1";
            $user=$conn->prepare($update);
            $user->execute([$_POST['password1'],$email]);
            if($update){
                echo '<div>You have successfully changed the password</div>';
            }
        }else{
            echo '<div>The passwords are not the same</div>';
        }
    }
        '
      </div>
     </form>
</body>
</div>
</html>';
}

