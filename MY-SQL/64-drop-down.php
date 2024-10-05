<?php
include("./61-config.php");

$get_students = $conn->prepare("select id, name from students");

$get_students->execute();

$student_date = $get_students->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="" id="">
        <option value=""> select value </option>
        <?php
        foreach ($student_date as $student) {
        ?>
            <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
        <?php } ?>
    </select>
</body>

</html>