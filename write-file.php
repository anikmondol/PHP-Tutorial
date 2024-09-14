<?php

// $fileName = "files/dummy.txt";
// $content = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus eveniet rem incidunt consectetur similique itaque laudantium molestias consequuntur? Impedit reprehenderit facilis officiis pariatur, reiciendis id? Doloribus rem placeat impedit.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus eveniet rem incidunt consectetur similique itaque laudantium molestias consequuntur? Impedit reprehenderit facilis officiis pariatur, reiciendis id? Doloribus rem placeat impedit.";
// $file = fopen($fileName,"w");
// fwrite($file, $content);
// fclose($file);
// echo "ok";


if (isset($_POST['filename'])) {
    $fileName = "files/" . $_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($fileName, 'w');
    fwrite($file, $content);
    fclose($file);
    echo "ok";
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
    <form action="" method="post">
        <input type="text" placeholder="enter file name" name="filename">
        <br>
        <br>
        <textarea name="content" id="">
        </textarea>
        <br>
        <br>
        <button>Create File</button>
    </form>
</body>

</html>