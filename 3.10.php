<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    
<form method="post">
    id:<input type="text" name="id">
    username:<input type="text" name="username">
    password:<input type="password" name="password">
    <input type="submit">

   

</form>


</body>
</html>

<?php
    include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $iid = $_POST['id'];
      
        $sql = "insert into user (id,name,password) VALUES ('$iid','$user','$pass')";
        mysqli_query($conn,$sql);
    }



?>