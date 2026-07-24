<?php
include 'db.php';
$sql = 'delete from user where id=1';
mysqli_query($conn,$sql);

echo "record deleted";
?>