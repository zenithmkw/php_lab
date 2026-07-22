<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter Password: <input type=password name="ps">
        Confirm Password: <input type=password name="cps">
        <input type="submit" value="change password">
        
    </form>    

</body>
</html>

<?php


include "db.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $pss = $_POST['ps'];
    $cpss = $_POST['cps'];
    
    if($pss == $cpss){
        $sql = "UPDATE `user` SET `password`='$cpss' WHERE id=1";
    }
}

mysqli_query($conn,$sql);



?>