<?php

$error=NULL;
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){

    function sendmail(){
        $email=$_POST['email'];
        $name = "Stevan";
        $to = $email;
        $subject = "Change password";
        $body = "<a href='http://localhost/web2022/formResetPassword.php?email=$email'>Change password</a>";
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
            header('Location:http://localhost/web2022/resetPassword.php?msg=Email is sent');
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }

    sendmail();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div class="box2">
    <form id="form" name="form" method="POST" action="resetPassword.php">
        <div id="form2">
            <input type="email" class="form-input" name="email" placeholder="Email" required><br>
            <input type="submit" id="form-submit" name="submit" value="Send email"><br>
            <?php
            if(isset($_GET['msg'])) {
                echo '<div id="msg">
                          '.$_GET['msg'].'
                      </div>';
            }
            ?>
        </div>
    </form>
</div>

</body>
</html>


