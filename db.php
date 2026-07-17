<?php

// $host     = 'localhost';
// $db_name  = 'bca_5c';
// $username = 'root'; 
// $password = ''; 


// $conn = mysqli_connect($host,$db_name,$username,$password,3307);
$conn = mysqli_connect('localhost', 'root', '', 'bca_5c', 3307);

if(!$conn){
    echo "something went wrong";
}


?>