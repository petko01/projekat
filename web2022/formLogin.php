<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="formLogin2.css">
</head>
<body>

<form id="form" name="form">
    <div id="form2" name="form2">
        <label class="label" for="username">Username: </label><br>
        <input type="text" id="username" name="username" placeholder="Username or email" required><br>
        <label class="label" for="pass">Password: </label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <a href="http://localhost/web2022/resetPassword.php">Forgot Password?</a><br>
        <input type="submit" id="sign-in" name="sign-in" value="Sign in"><br>
        <div id="error"></div>
    </div>
</form>

</body>
</html>