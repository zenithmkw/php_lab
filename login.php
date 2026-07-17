<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">


</form>


</body>
</html>

<?php
    include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $_POST['username'];
        $pass = $_POST['password'];
      
        $sql = "insert into user (name,password) VALUES ('$user','$pass')";
        mysqli_query($conn,$sql);
    }



?>