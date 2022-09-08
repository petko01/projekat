<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link type="text/css" rel="stylesheet" href="workout2.css">
</head>
<body>

<div id="box2">

    <?php

    require_once ('db_config.php');
    $query = "SELECT * FROM training WHERE type=?";
    $user = $conn->prepare($query);
    $user->execute(['Build Muscle']);
    $result = $user->fetchAll(PDO::FETCH_OBJ);

    foreach ($result as $res){

        echo '<div class="box3">
                          
                                <a href="priprema.php?id='.$res->id.'">
                                  <div class="box4">
                                         '.$res->title.'.<br>
                                  </div>
                                </a> 
                           </div>';

    }

    ?>

</div>

</body>
</html>
