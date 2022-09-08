<?php

require_once ('db_config.php');

if (isset($_GET['vkey'])){

    $vkey=$_GET['vkey'];
    $query="SELECT verified,vkey FROM users WHERE verified=? AND vkey=? LIMIT 1";
    $user=$conn->prepare($query);
    $user->execute([0,$vkey]);

    if($user->rowCount()==1){
        $query="UPDATE users SET verified=? WHERE vkey=? LIMIT 1";
        $user=$conn->prepare($query);
        $user->execute([1,$vkey]);
        if($query){
            echo "You have successfully activated your account";
        }else{
            echo "Error activating account";
        }
    }else {
        echo "The account does not exist";
    }
}else{
    echo "Error";
}


