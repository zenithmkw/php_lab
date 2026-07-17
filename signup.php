<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    
<form method="post">
    <label>Username</label>
    <input type="text" name="username"><br>
    <label>Password</label>
    <input type="password" name="password"><br>
    <label>Confirm Password</label>
    <input type="password" name="cpassword"><br>
    <label>Email</label>
    <input type="email" name="email"><br>
    <label>phone</label>
    <input type="text" name="number"><br>
    <input type="submit">


</form>


</body>
</html>

<?php
    include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['number'];
        $sql = "insert into signup (username,password,email,phone) VALUES ('$user','$pass','$email','$phone')";
        mysqli_query($conn,$sql);
    }



?>