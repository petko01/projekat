<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="workoutUser.css">
</head>
<body>
<div id="box-workout">
    <div id="row">
        <?php

        require_once ('db_config.php');

        $arrayTitle=array();
        $arrayType=array();
        $arrayID=array();

        $stmt = $conn->prepare("SELECT * FROM training WHERE type=? AND status=?");
        $stmt->execute(['Fat loss',0]);
        $user = $stmt->fetchAll();
        // and somewhere later:
        foreach ($user as $row) {
            array_push($arrayTitle,$row['title']);
            array_push($arrayID,$row['user_id']);
            array_push($arrayType,$row['type']);
        }

        $arrayTitle=array_unique($arrayTitle);
        $arrayID=array_unique($arrayID);
        $arrayType=array_unique($arrayType);

        foreach ($arrayTitle as $title) {

            echo '
          <div id="item">
            <div id="title">
               <a href="workoutList.php?title3='.$title.'" target="blank">' . $title . '</a>
            </div>
          </div>';

        }

        ?>
    </div>
</div>
</body>
</html>




