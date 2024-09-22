<?php

include("./60-config.php");

// $get_students = $conn->prepare("SELECT * FROM `students`");
// $get_students->execute();

// $result = $get_students->fetchAll();

// print_r($result);


$get_students = $conn->prepare("SELECT id, name FROM `students`");
$get_students->execute();
$results = $get_students->fetchAll();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <select name="" id="">
        <?php foreach ($results as $value) {
         ?>
        <option value="<?= $value['id'] ?>" > <?= $value['name'] ?> </option>

        <?php  };?>
    </select>
    </form>
</body>
</html>