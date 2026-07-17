<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form method="post">
    <label for=""> product name</label>
    <input type="text" name="name"><br>
    <label for=""> product price</label>
    <input type="number" name="price"><br>
    <label for="cars">product type:</label>

    <select name="type" id="types">
    <option value="food">food</option>
    <option value="transport">transport</option>
    <option value="toys">toys</option>
    <option value="decor">decoration</option>
    </select>
    <br>
    <label for=""> product image</label>
    <input type="file" name="img"><br>
    <label for=""> product Quantity</label>
    <input type="number" name="qty"><br>
    <input type="submit">

</form>
</body>
</html>

<?php

include 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $image = $_POST['img'];
        $qty = $_POST['qty'];
        $sql = "INSERT INTO `product`(`name`, `price`, `type`, `image`, `qty`) VALUES ('$name','$price','$type','$image','$qty')";
        mysqli_query($conn,$sql);
    }



?>