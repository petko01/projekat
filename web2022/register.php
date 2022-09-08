<?php

require_once ('db_config.php');
use PHPMailer\PHPMailer\PHPMailer;

$error="";

if(!empty($_POST['username'])){

    if(strlen($_POST['username'])>3){

    $query="SELECT * FROM users WHERE username=?";
    $user=$conn->prepare($query);
    $user->execute([$_POST['username']]);

    if($user->rowCount()){
        $error.=" Username exists in the database, please choose a new one<br>";
    }else{
        $username=$_POST['username'];
    }
  }else{
        $error.=" Username must be longer than 3 characters<br>";
    }
}else{
    $error.= " You must fill in your username<br>";
}

if(!empty($_POST['fname'])){
    $fname=$_POST['fname'];
}else{
    $error.= " You must fill in your name<br>";
}

if(!empty($_POST['sname'])){
    $sname=$_POST['sname'];
}else{
    $error.= " You must fill in your surname<br>";
}

if(!empty($_POST['age'])){
    if(is_numeric($_POST['age'])){
        $age=$_POST['age'];
    }else{
        $error.= " The number of years cannot be of type string<br>";
    }
}else{
    $error.= " You must enter your age<br>";
}

if(!empty($_POST['phone'])){
    if(is_numeric($_POST['phone'])) {
        $phone = $_POST['phone'];
    }else{
        $error.= " The phone number cannot be of string type<br>";
    }
}else{
    $error.= " You must enter your number<br>";
}

if(!empty($_POST['password'])){
    if(strlen($_POST['password'])>8){

    }else{
        $error.= " Password must be longer than 8 characters<br>";
    }
}else{
    $error.= " You must fill in your password<br>";
}

if(!empty($_POST['password2'])){

}else{
    $error.= " You must fill in your repeated password<br>";
}

if(!empty($_POST['password']) && !empty($_POST['password2'])){

    if($_POST['password'] == $_POST['password2']){
        $password=$_POST['password'] ;
    }else{
        $error.=" Your passwords do not match, they must be the same<br>";
    }
}

if(!empty($_POST['email'])){

    $query="SELECT * FROM users WHERE email=?";
    $user=$conn->prepare($query);
    $user->execute([$_POST['email']]);

    if($user->rowCount()){
        $error.=" Email exists in the database, please choose a new one<br>";
    }else{
        $email=$_POST['email'];
    }
}else{
    $error.= " You must enter your email<br>";
}

$checkbox='user';
$cv='';

if(isset($_POST['checkbox'])){
    $checkbox='trainer';

    if(!empty($_POST['cv'])){
        $cv=$_POST['cv'];
    }else{
        $error.=" You must fill out a CV<br>";
    }
}else{
    $checkbox='user';
}

if($error <> ""){
    echo $error;
}else{

    $vkey=time().$username;
    $query="INSERT INTO users 
                      SET fname=?,
                          sname=?,
                          age=?,
                          phone=?,
                          username=?,
                          email=?,
                          password=?,
                          vkey=?,
                          user_type=?,
                          cv=?,
                          image=?";
    $user=$conn->prepare($query);
    $user->execute([$fname,$sname,$age,$phone,$username,$email,password_hash($_POST['password'], PASSWORD_DEFAULT),$vkey,$checkbox,$cv,'avatar.png']);

    if($query){

        function sendmail($vkey,$email,$fname){
            $name = $fname;
            $to = $email;
            $subject = "Registration:\n";
            $body = "<a href='http://localhost/web2022/verification.php?vkey=$vkey'>Activate your account</a>";
            $from = "petkovicstevan01@gmail.com";
            $password = "jbeybznzfqyciozc";

            require_once 'includes/PHPMailer.php';
            require_once 'includes/SMTP.php';
            require_once 'includes/Exception.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $from;
            $mail->Password = $password;
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);

            $mail->isHTML(true);
            $mail->setFrom($from, $name);
            $mail->addAddress($to);
            $mail->Subject = ("$subject");
            $mail->Body = $body;
            if ($mail->send()) {

            } else {
                echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }
        }
        sendmail($vkey,$email,$fname);
    }else {
        echo "Error";
    }

    echo "We have sent a verification email to your email address to complete the registration";

}


