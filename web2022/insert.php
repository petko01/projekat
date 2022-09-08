<?php

if(isset($_POST['insert'])){

    $title=$_POST['title'];
    $type=$_POST['type'];

    $day=$_POST['day1'];
    $exercise=$_POST['day1-exercise1'];
    $sets=$_POST['day1-sets1'];
    $reps=$_POST['day1-reps1'];
    $link=$_POST['day1-link1'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise2'];
    $sets=$_POST['day1-sets2'];
    $reps=$_POST['day1-reps2'];
    $link=$_POST['day1-link2'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise3'];
    $sets=$_POST['day1-sets3'];
    $reps=$_POST['day1-reps3'];
    $link=$_POST['day1-link3'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise4'];
    $sets=$_POST['day1-sets4'];
    $reps=$_POST['day1-reps4'];
    $link=$_POST['day1-link4'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise5'];
    $sets=$_POST['day1-sets5'];
    $reps=$_POST['day1-reps5'];
    $link=$_POST['day1-link5'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise6'];
    $sets=$_POST['day1-sets6'];
    $reps=$_POST['day1-reps6'];
    $link=$_POST['day1-link6'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise7'];
    $sets=$_POST['day1-sets7'];
    $reps=$_POST['day1-reps7'];
    $link=$_POST['day1-link7'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $day=$_POST['day2'];
    $exercise=$_POST['day2-exercise1'];
    $sets=$_POST['day2-sets1'];
    $reps=$_POST['day2-reps1'];
    $link=$_POST['day2-link1'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise2'];
    $sets=$_POST['day2-sets2'];
    $reps=$_POST['day2-reps2'];
    $link=$_POST['day2-link2'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise3'];
    $sets=$_POST['day2-sets3'];
    $reps=$_POST['day2-reps3'];
    $link=$_POST['day2-link3'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise4'];
    $sets=$_POST['day2-sets4'];
    $reps=$_POST['day2-reps4'];
    $link=$_POST['day2-link4'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise5'];
    $sets=$_POST['day2-sets5'];
    $reps=$_POST['day2-reps5'];
    $link=$_POST['day2-link5'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise6'];
    $sets=$_POST['day2-sets6'];
    $reps=$_POST['day2-reps6'];
    $link=$_POST['day2-link6'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day2-exercise7'];
    $sets=$_POST['day2-sets7'];
    $reps=$_POST['day2-reps7'];
    $link=$_POST['day2-link7'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $day=$_POST['day3'];
    $exercise=$_POST['day3-exercise1'];
    $sets=$_POST['day3-sets1'];
    $reps=$_POST['day3-reps1'];
    $link=$_POST['day3-link1'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise2'];
    $sets=$_POST['day3-sets2'];
    $reps=$_POST['day3-reps2'];
    $link=$_POST['day3-link2'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise3'];
    $sets=$_POST['day3-sets3'];
    $reps=$_POST['day3-reps3'];
    $link=$_POST['day3-link3'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise4'];
    $sets=$_POST['day3-sets4'];
    $reps=$_POST['day3-reps4'];
    $link=$_POST['day3-link4'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day1-exercise5'];
    $sets=$_POST['day3-sets5'];
    $reps=$_POST['day3-reps5'];
    $link=$_POST['day3-link5'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise6'];
    $sets=$_POST['day3-sets6'];
    $reps=$_POST['day3-reps6'];
    $link=$_POST['day3-link6'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise7'];
    $sets=$_POST['day3-sets7'];
    $reps=$_POST['day3-reps7'];
    $link=$_POST['day3-link7'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $day=$_POST['day4'];
    $exercise=$_POST['day4-exercise1'];
    $sets=$_POST['day4-sets1'];
    $reps=$_POST['day4-reps1'];
    $link=$_POST['day4-link1'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day3-exercise2'];
    $sets=$_POST['day4-sets2'];
    $reps=$_POST['day4-reps2'];
    $link=$_POST['day4-link2'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day4-exercise3'];
    $sets=$_POST['day4-sets3'];
    $reps=$_POST['day4-reps3'];
    $link=$_POST['day4-link3'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day4-exercise4'];
    $sets=$_POST['day4-sets4'];
    $reps=$_POST['day4-reps4'];
    $link=$_POST['day4-link4'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day4-exercise5'];
    $sets=$_POST['day4-sets5'];
    $reps=$_POST['day4-reps5'];
    $link=$_POST['day4-link5'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day4-exercise6'];
    $sets=$_POST['day4-sets6'];
    $reps=$_POST['day4-reps6'];
    $link=$_POST['day4-link6'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    $exercise=$_POST['day4-exercise7'];
    $sets=$_POST['day4-sets7'];
    $reps=$_POST['day4-reps7'];
    $link=$_POST['day4-link7'];

    if($day!='' && $exercise!='' && $sets!='' && $reps!='' && $link!='' && $title!='' && $type!=''){

        $query = "INSERT INTO training SET 
                                     user_id=?,
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_SESSION['id'],$type,$title,$day,$exercise,$sets,$reps,$link]);

    }

    header('Location:index.php');

}