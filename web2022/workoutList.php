<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="workoutList.css">
</head>
<body>

<?php



if(isset($_GET['title'])){

$arrayTitle=array();
$arrayType=array();
$arrayDay=array();

require_once ('db_config.php');

$query = "SELECT * FROM training WHERE title=?";
$user = $conn->prepare($query);
$user->execute([$_GET['title']]);
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

        $query2 = "SELECT * FROM training WHERE title=? AND day=?";
        $user = $conn->prepare($query2);
        $user->execute([$arrayTitle[0],$day]);
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

    $query = "UPDATE training SET popular=? WHERE title=?";
    $user = $conn->prepare($query);
    $user->execute([1,$_GET['title']]);
    $result = $user->fetchAll(PDO::FETCH_OBJ);

}
?>

<?php

if(isset($_GET['title2'])){

    $arrayTitle=array();
    $arrayType=array();
    $arrayDay=array();

    require_once ('db_config.php');

    $query = "SELECT * FROM training WHERE title=?";
    $user = $conn->prepare($query);
    $user->execute([$_GET['title2']]);
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

        $query2 = "SELECT * FROM training WHERE title=? AND day=?";
        $user = $conn->prepare($query2);
        $user->execute([$arrayTitle[0],$day]);
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
}
?>

<?php

if(isset($_GET['title3'])){

    $arrayTitle=array();
    $arrayType=array();
    $arrayDay=array();

    require_once ('db_config.php');

    $query = "SELECT * FROM training WHERE title=?";
    $user = $conn->prepare($query);
    $user->execute([$_GET['title3']]);
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

        $query2 = "SELECT * FROM training WHERE title=? AND day=?";
        $user = $conn->prepare($query2);
        $user->execute([$arrayTitle[0],$day]);
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
}
?>

<?php

if(isset($_GET['title4'])){

    $arrayTitle=array();
    $arrayType=array();
    $arrayDay=array();

    require_once ('db_config.php');

    $query = "SELECT * FROM training WHERE title=?";
    $user = $conn->prepare($query);
    $user->execute([$_GET['title4']]);
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

        $query2 = "SELECT * FROM training WHERE title=? AND day=?";
        $user = $conn->prepare($query2);
        $user->execute([$arrayTitle[0],$day]);
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
}
?>



</body>
</html>


