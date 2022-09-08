<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link type="text/css" rel="stylesheet" href="profileEdit.css">
</head>
<body>

<?php

require_once('db_config.php');
$query = "SELECT * FROM users WHERE id=?";
$user = $conn->prepare($query);
$user->execute([$_SESSION['id']]);
$result = $user->fetch(PDO::FETCH_OBJ);

echo '
         <form id="form-profile" method="POST" action="index.php" enctype="multipart/form-data">
           <label for="file">Image: </label><input type="file" id="image" name="image"><br>
           <label for="fname">Name: </label><input type="text" id="fname" name="fname" value="'.$result->fname.'"><br>
           <label for="sname">Surname: </label><input type="text" id="sname" name="sname" value="'.$result->sname.'"><br>
           <label for="age">Age: </label><input type="text" id="age" name="age" value="'.$result->age.'"><br>
           <label for="phone">Phone: </label><input type="text" id="phone" name="phone" value="'.$result->phone.'"><br>
           <label for="password">Password: </label><input type="password" id="password" name="password"  value="'.$result->password.'"><br>    
           <input type="submit" id="change" name="change" value="Confirm">
           <input type="submit" id="cancel" name="cancel" value="Cancel">
         </form>';

if(isset($_POST['change'])){
    $image_file = $_FILES["image"];

// Image not defined, let's exit
    if (!isset($image_file)) {
        die('No file uploaded.');
    }

// Move the temp image file to the images/ directory
    move_uploaded_file(
// Temp image location
        $image_file["tmp_name"],

        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ . "/uploads/" . $image_file["name"]
    );

    require_once('db_config.php');
    $query = "UPDATE users SET fname=?, sname=?, age=?, phone=?, password=?,image=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_POST['fname'],$_POST['sname'],$_POST['age'],$_POST['phone'],password_hash($_POST['password'], PASSWORD_DEFAULT),$image_file["name"], $_SESSION['id']]);
}

if(isset($_POST['cancel'])){
    header('Location:index.php');
}

?>
</body>
</html>
