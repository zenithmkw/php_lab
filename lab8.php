<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
      Select File To Upload:<input type="file" name="image">
        <input type="submit">

</form>
</body>
</html>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES["image"];
    $name = $image["name"];
    $tmp = $image["tmp_name"];
    $error = $image["error"];
if(!is_dir('uploads')){
    mkdir("uploads");
}
 move_uploaded_file($tmp,"uploads/".$name);

 echo "image uploaded!";
}
?>
