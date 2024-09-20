<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="enter file name" name='file_name'>
        <br>
        <br>
        <textarea name="content" id="" rows="15"></textarea>
        <br>
        <br>
        <button name="btn">Create File</button>
    </form>
</body>

</html>


<?php

if (isset($_REQUEST['btn'])) {

    $file_name = $_REQUEST['file_name'];
    $content = $_REQUEST['content'];

    if (!$content ||  !$file_name) {
        echo "sorry";
    } else {
        $file = fopen($file_name, "w");
        fwrite($file, $content);
        fclose($file);
    }
}



?>