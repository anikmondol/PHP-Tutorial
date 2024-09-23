<?php

include("./config.php");


if (isset($_GET['edit_id'])) {
    $id = $_REQUEST['edit_id'];
    $get_student = $conn->prepare("SELECT * FROM `students` WHERE id=$id");
    $get_student->execute();
    $result = $get_student->fetchAll();
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
    <form action="81-student.php?edit_id=<?= $result[0]['id'] ?>" method="post">
        <input type="text" name="name" placeholder="Enter Name" value="<?= $result[0]['name']; ?>">
        <br>
        <br>
        <input type="text" name="course" placeholder="Enter Course" value="<?= $result[0]['course']; ?>">
        <br>
        <br>
        <input type="text" name="batch" placeholder="Enter Batch" value="<?= $result[0]['batch']; ?>">
        <br>
        <br>
        <input type="text" name="city" placeholder="Enter City" value="<?= $result[0]['city']; ?>">
        <br>
        <br>
        <input type="text" name="year" placeholder="Enter Year" value="<?= $result[0]['year']; ?>">
        <br>
        <br>
        <button name="update" type="submit">Submit</button>
    </form>
</body>

</html>