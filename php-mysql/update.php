<?php

include('./config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $get_Student = $conn->prepare("select * from students where id='$id'");
    $get_Student->execute();
    $results = $get_Student->fetchAll();

    $id = ($results[0]['id']);
    $name = ($results[0]['name']);
    $coures = ($results[0]['coures']);
    $batch = ($results[0]['batch']);
    $city = ($results[0]['city']);
    $year = ($results[0]['year']);


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
        <input type="text" name='name' value="<?= $name ?>">
        <br>
        <br>
        <input type="text" name='coures' value="<?= $coures ?>">
        <br>
        <br>
        <input type="text" name='batch' value="<?= $batch ?>">
        <br>
        <br>
        <input type="text" name='city' value="<?= $city ?>">
        <br>
        <br>
        <input type="text" name='year' value="<?= $year ?>">
        <br>
        <br>
        <button type="submit" name="update" value="<?= $id ?>">Update Student Info</button>

    </form>
</body>

</html>


<?php
 if (isset($_POST['update'])) {

    $id = $_POST['update'];

     $name = $_POST['name'];
    $coures = $_POST['coures'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $batch = $_POST['batch'];
    
$update_student = $conn->prepare("update students set 
name='$name', 
coures='$coures', 
batch='$batch', 
city='$city', 
year='$year' 
where id='$id'");
$update_student->execute();

if ($update_student->execute()) {
    header('location:delet-edit');
} else {
    header('location');
}


}


?>