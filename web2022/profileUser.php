<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="profileUser.css">
</head>
<body>
<?php

require_once ('db_config.php');
$query = "SELECT * FROM users WHERE user_type=? AND id=? ";
$stmt = $conn->prepare($query);
$stmt->execute(['user',$_SESSION['id']]);
$user = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($user as $u) {

    echo '
<div class="container2">
    <div class="trainer">
        <div id="up">
            <div id="img" style="background-image: url(images/'.$u->image.'); background-repeat: no-repeat; background-size: 100% 100%" ></div>
            <div id="title">
            <h3>Name: '.$u->fname.' '.$u->sname.'</h3>
            <h3>Age: '.$u->age.'</h3>
            <h3>Email: '.$u->email.'</h3>
            <h3>Contact: '.$u->phone.'</h3>
            <button style="margin: 20px" id="profile2" name="profile2">Edit profile</button>
         </div>
      
    </div>
</div>';
}
?>

</body>
</html>




