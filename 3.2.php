<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
   
    <input type="submit" value="see cookie">
</form>

</body>

</html>

<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
   echo "username:" . $_COOKIE["username"]. "<br>"; 
 }
 
 


?>
