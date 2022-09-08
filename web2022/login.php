<?php

include('db_config.php');

if(!isset($_SESSION['id'])){
    session_start();
}

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE (username =? OR email=?) AND password=? AND verified=? AND status=?";
    $user = $conn->prepare($query);
    $user->execute([$username,$username,$password,1,0]);

    if ($user->rowCount() > 0){

        $result = $user->fetchAll(PDO::FETCH_OBJ);

        foreach ($result as $res){
            $userId = $res->id;
        }

        $_SESSION['id'] = $userId;
        echo json_encode(array('success'=> 1));

    }else{
        echo json_encode(array('success'=> 0));
    }
}
