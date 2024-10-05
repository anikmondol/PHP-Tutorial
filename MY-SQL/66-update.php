<?php

session_start();

include("./61-config.php");

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $get_students = $conn->prepare("SELECT * FROM `students` where id='$id'");

    $get_students->execute();

    $student = $get_students->fetchAll();
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
        <input name="name" type="text" placeholder="enter name" value="<?= $student[0]['name'] ?>">
        <br>
        <br>
        <input name="course" type="text" placeholder="enter course"  value="<?= $student[0]['course'] ?>">
        <br>
        <br>
        <input name="batch" type="text" placeholder="enter batch"  value="<?= $student[0]['batch'] ?>">
        <br>
        <br>
        <input name="city" type="text" placeholder="enter city"  value="<?= $student[0]['city'] ?>">
        <br>
        <br>
        <input name="year" type="text" placeholder="enter year"  value="<?= $student[0]['year'] ?>">
        <br>
        <br>
        <button type="submit" name="btn" value="<?= $student[0]['id'] ?>" >Submit</button>

    </form>
</body>

</html>



<?php

if (isset($_REQUEST['btn'])) {

    
    $id = $_REQUEST['btn'];
    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch = $_REQUEST['batch'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];

    $delete = $conn->prepare("UPDATE `students` SET `id`=$id,`name`='$name',`course`='$course',`batch`='$batch',`city`='$city',`year`='$year' WHERE id=$id");
    $delete->execute();
    $_SESSION["update_done"] = "update successful !!!";
    // header("location: 65-delete-edit.php");
    header("location: 67-search.php");
   
}


?>