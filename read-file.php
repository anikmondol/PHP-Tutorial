<?php

// $file = "files/dummy.txt";
// $my_file = fopen($file, 'r');
// echo fread($my_file, filesize($file));
// fclose($my_file);

if (isset($_FILES['file'])) {


    // print_r($_FILES['file']);

    $file = $_FILES['file']['tmp_name'];
    $my_file = fopen($file, 'r');
    echo fread($my_file, filesize($file));
    fclose($my_file);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br>
        <br>
        <button>Read File</button>
    </form>
</body>

</html>