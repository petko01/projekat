<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="profileTrainer.css">
</head>
<body>
<?php

require_once ('db_config.php');
$query = "SELECT * FROM users WHERE user_type=? AND id=? ";
$stmt = $conn->prepare($query);
$stmt->execute(['trainer',$_SESSION['id']]);
$user = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($user as $u) {

    echo '
<div class="container2">
    <div class="trainer">
        <div id="up">
            <div id="img" style="background-image: url(uploads/'.$u->image.'); background-repeat: no-repeat; background-size: 100% 100%" ></div>
            <div id="title">
            <h3>Name: '.$u->fname.' '.$u->sname.'</h3>
            <h3>Age: '.$u->age.'</h3>
            <h3>Email: '.$u->email.'</h3>
            <h3>Contact: '.$u->phone.'</h3>
            <button id="profile" name="profile">Edit profile</button>
         </div>
        
        <div id="down">
            <div id="text">'.$u->cv.'</div>
        </div>
    </div>
</div>';
}
?>

</body>
</html>



