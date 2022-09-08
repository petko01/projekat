<?php

require_once ('db_config.php');

if(isset($_GET['admin'])){


    $query = "UPDATE training SET status=? WHERE title=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([1,$_GET['admin']]);
    header('Location:index.php');

}

if(isset($_GET['admin2'])){

    $query = "UPDATE training SET status=? WHERE title=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([0,$_GET['admin2']]);
    header('Location:index.php');

}

if(isset($_GET['admin3'])){


    $query = "UPDATE users SET status=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([1,$_GET['admin3']]);
    header('Location:index.php');

}

if(isset($_GET['admin4'])){

    $query = "UPDATE users SET status=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([0,$_GET['admin4']]);
    header('Location:index.php');

}

