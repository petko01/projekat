<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="home.css">
</head>
<body>
<?php

require_once ('db_config.php');

$query = "SELECT * FROM users WHERE user_type=?";
$user = $conn->prepare($query);
$user->execute(['trainer']);
$result = $user->fetchAll(PDO::FETCH_OBJ);

foreach ($result as $res) {

    echo '
  <div id="box2">
    <div class="trainer">
        <div id="up">
            <div id="img" style="background-image: url(uploads/'.$res->image.'); background-repeat: no-repeat; background-size: 100% 100%" ></div>
            <div id="title">
            <h3>Name: '.$res->fname.' '.$res->sname.'</h3>
            <h3>Age: '.$res->age.'</h3>
            <h3>Email: '.$res->email.'</h3>
            <h3>Contact: '.$res->phone.'</h3>
         </div>
        <div id="down">
            <div id="text">'.$res->cv.'</div>
        </div>
    </div>
  </div>';

}

?>

</body>
</html>