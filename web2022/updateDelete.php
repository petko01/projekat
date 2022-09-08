<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="updateDelete2.css">
</head>
<body>
<?php

if(isset($_GET['id'])){
    require_once ('db_config.php');
    $query = "SELECT * FROM  training WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($user as $u) {

        echo '
           <form id="form-update" name="form" method="POST" action="index.php?updateId=' . $u->id . '">
               <label for="id">Id: </label><input id="id" type="text" value="' . $u->id . '" readonly><br>
               <label for="user_id">User: </label><input id="user_id" type="text" value="' . $u->user_id . '" readonly><br>
               <label for="title1">Title: </label><input id="title1" type="text" name="title1" value="' . $u->title . '"><br>
               <label for="type">Type: </label><input id="type" type="text" name="type"  value="' . $u->type . '"><br>
               <label for="day">Day: </label><input id="day" type="text" name="day"  value="' . $u->day . '"><br>
               <label for="exercise">Exercise: </label><input id="exercise" type="text" name="exercise"  value="' . $u->exercise . '"><br>
               <label for="sets">Sets: </label><input id="sets" type="text" name="sets"  value="' . $u->sets . '"><br>
               <label for="reps">Reps: </label><input id="reps" type="text" name="reps"  value="' . $u->reps . '"><br>
               <label for="link">Link: </label><input id="link" type="text" name="link"  value="' . $u->link . '"><br><br>
               <input type="submit" name="update" id="update" value="Confirm">
               <input type="submit" name="cancel" id="cancel" value="Cancel">
           </form>';
    }
}

if(isset($_GET['id2'])){
    require_once ('db_config.php');
    $query = "DELETE  FROM  training WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_GET['id2']]);
}


?>
</body>
</html>
