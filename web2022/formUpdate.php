<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="formUpdate.css">
</head>
<body>

<?php
require_once ('db_config.php');
$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Build Muscle',$_SESSION['id']]);
$query2 = $user->fetchAll(PDO::FETCH_OBJ);

foreach ($query2 as $q2) {

    echo '
    <table>
              <tr>
               <th class="column1">Title:</th>
               <th class="column2">Type:</th>
               <th class="column3">Day:</th>
               <th class="column4">Exercise:</th>
               <th class="column5">Sets:</th>
               <th class="column6">Reps:</th>
               <th colspan="3" class="column7">Link:</th>
              </tr>
               
               <tr>
               <td class="column1">'.$q2->title.'</td>
               <td class="column2">'.$q2->type.'</td>
               <td class="column3">'.$q2->day.'</td>
               <td class="column4">'.$q2->exercise.'</td>
               <td class="column5">'.$q2->sets.'</td>
               <td class="column6">'.$q2->reps.'</td>
               <td class="column7">'.$q2->link.'</td>
               <td class="column8"><a href="index.php?id='.$q2->id.'">Update</a></td>
               <td class="column8"><a href="index.php?id2='.$q2->id.'">Delete</a></td>
               </tr>
               </table>
    ';
}


$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Fatt loss',$_SESSION['id']]);
$query2 = $user->fetchAll(PDO::FETCH_OBJ);

foreach ($query2 as $q2) {

    echo '
    <table>
              <tr>
               <th class="column1">Title:</th>
               <th class="column2">Type:</th>
               <th class="column3">Day:</th>
               <th class="column4">Exercise:</th>
               <th class="column5">Sets:</th>
               <th class="column6">Reps:</th>
               <th colspan="3" class="column7">Link:</th>
              </tr>
               
               <tr>
               <td class="column1">'.$q2->title.'</td>
               <td class="column2">'.$q2->type.'</td>
               <td class="column3">'.$q2->day.'</td>
               <td class="column4">'.$q2->exercise.'</td>
               <td class="column5">'.$q2->sets.'</td>
               <td class="column6">'.$q2->reps.'</td>
               <td class="column7">'.$q2->link.'</td>
               <td class="column8"><a href="index.php?id='.$q2->id.'">Update</a></td>
               <td class="column8"><a href="index.php?id2='.$q2->id.'">Delete</a></td>
               </tr>
               </table>
    ';
}


$query = "SELECT * FROM training WHERE type=? AND user_id=?";
$user = $conn->prepare($query);
$user->execute(['Sport',$_SESSION['id']]);
$query2 = $user->fetchAll(PDO::FETCH_OBJ);

foreach ($query2 as $q2) {

    echo '
    <table>
              <tr>
               <th class="column1">Title:</th>
               <th class="column2">Type:</th>
               <th class="column3">Day:</th>
               <th class="column4">Exercise:</th>
               <th class="column5">Sets:</th>
               <th class="column6">Reps:</th>
               <th colspan="3" class="column7">Link:</th>
              </tr>
               
               <tr>
               <td class="column1">'.$q2->title.'</td>
               <td class="column2">'.$q2->type.'</td>
               <td class="column3">'.$q2->day.'</td>
               <td class="column4">'.$q2->exercise.'</td>
               <td class="column5">'.$q2->sets.'</td>
               <td class="column6">'.$q2->reps.'</td>
               <td class="column7">'.$q2->link.'</td>
               <td class="column8"><a href="index.php?id='.$q2->id.'">Update</a></td>
               <td class="column8"><a href="index.php?id2='.$q2->id.'">Delete</a></td>
               </tr>
               </table>
    ';
}


?>

</body>
</html>


