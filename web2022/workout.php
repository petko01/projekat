<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="workout.css">
</head>
<body>

<?php

require_once ('db_config.php');

$arrayTitle=array();
$arrayType=array();
$arrayDay=array();
$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Build Muscle',$_SESSION['id']]);
$result = $user->fetchAll(PDO::FETCH_OBJ);
foreach ($result as $res) {
    array_push($arrayTitle,$res->title);
    array_push($arrayType,$res->type);
    array_push($arrayDay,$res->day);
}

$arrayTitle=array_unique($arrayTitle);
$arrayType=array_unique($arrayType);
$arrayDay=array_unique($arrayDay);

echo '
       <h2 class="color">'.$arrayTitle[0].'</h2>
       <h3 class="color">'.$arrayType[0].'</h3>';

foreach ($arrayDay as $day) {

    $query2 = "SELECT * FROM training WHERE type=? AND day=? AND user_id=?";
    $user = $conn->prepare($query2);
    $user->execute(['Build Muscle', $day, $_SESSION['id']]);
    $result = $user->fetchAll(PDO::FETCH_OBJ);

    echo '<br>   
       <h3>' . $day . '</h3>
    ';

    echo '
    <table>
       <tr>
         <th class="column1">Exercise</th>
         <th class="column2">Sets</th>
         <th class="column3">Reps</th>
       </tr>
    </table>
    ';


    foreach ($result as $res) {

        echo '
    <table>
       <tr>
         <td class="column1"><a href="'.$res->link.'" target="_blank">' . $res->exercise . '</a></td>
         <td class="column2">' . $res->sets . '</td>
         <td class="column3">' . $res->reps . '</td>
       </tr>
    </table>
    ';

    }
}

$arrayTitle=array();
$arrayType=array();
$arrayDay=array();
$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Fat loss',$_SESSION['id']]);
$result = $user->fetchAll(PDO::FETCH_OBJ);
foreach ($result as $res) {
    array_push($arrayTitle,$res->title);
    array_push($arrayType,$res->type);
    array_push($arrayDay,$res->day);
}

$arrayTitle=array_unique($arrayTitle);
$arrayType=array_unique($arrayType);
$arrayDay=array_unique($arrayDay);

echo '
       <h2 class="color">'.$arrayTitle[0].'</h2>
       <h3 class="color">'.$arrayType[0].'</h3>';

foreach ($arrayDay as $day) {

    $query2 = "SELECT * FROM training WHERE type=? AND day=? AND user_id=?";
    $user = $conn->prepare($query2);
    $user->execute(['Fat loss', $day, $_SESSION['id']]);
    $result = $user->fetchAll(PDO::FETCH_OBJ);

    echo '<br>   
       <h3>' . $day . '</h3>
    ';

    echo '
    <table>
       <tr>
         <th class="column1">Exercise</th>
         <th class="column2">Sets</th>
         <th class="column3">Reps</th>
       </tr>
    </table>
    ';


    foreach ($result as $res) {

        echo '
    <table>
       <tr>
         <td class="column1"><a href="'.$res->link.'" target="_blank">' . $res->exercise . '</a></td>
         <td class="column2">' . $res->sets . '</td>
         <td class="column3">' . $res->reps . '</td>
       </tr>
    </table>
    ';

    }
}

$arrayTitle=array();
$arrayType=array();
$arrayDay=array();
$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Sport',$_SESSION['id']]);
$result = $user->fetchAll(PDO::FETCH_OBJ);
foreach ($result as $res) {
    array_push($arrayTitle,$res->title);
    array_push($arrayType,$res->type);
    array_push($arrayDay,$res->day);
}

$arrayTitle=array_unique($arrayTitle);
$arrayType=array_unique($arrayType);
$arrayDay=array_unique($arrayDay);

echo '
       <h2 class="color">'.$arrayTitle[0].'</h2>
       <h3 class="color">'.$arrayType[0].'</h3>';

foreach ($arrayDay as $day){

    $query2 = "SELECT * FROM training WHERE type=? AND day=? AND user_id=?";
    $user = $conn->prepare($query2);
    $user->execute(['Sport',$day,$_SESSION['id']]);
    $result = $user->fetchAll(PDO::FETCH_OBJ);

    echo '<br>   
       <h3>'.$day.'</h3>
    ';

    echo '
    <table>
       <tr>
         <th class="column1">Exercise</th>
         <th class="column2">Sets</th>
         <th class="column3">Reps</th>
       </tr>
    </table>
    ';


    foreach ($result as $res) {

        echo '
    <table>
       <tr>
         <td class="column1"><a href="'.$res->link.'" target="_blank">' . $res->exercise . '</a></td>
         <td class="column2">' . $res->sets . '</td>
         <td class="column3">' . $res->reps . '</td>
       </tr>
    </table>
    ';

    }


}

echo "<br><br>"





?>

</body>
</html>


