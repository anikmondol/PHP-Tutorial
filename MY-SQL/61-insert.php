<?php

include("./60-config.php");

if (isset($_REQUEST['btn'])) {

    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch = $_REQUEST['batch'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];

    $students = $conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'$name',' $course','$batch','$city','$year')");
   if ($name && $course && $batch && $city && $year) {
    $students->execute();
    echo "successfull";
   }else{
    echo "file the all input section";
    echo "<br>";
    echo "<br>";
   }
}

// $students = $conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'Ritu','BBA','Afternoon','Mirpur','1st')");

// // $result = $students->execute();

// if ($students->execute()) {
//    echo true;
// } else {
//     echo false;
// }


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
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="text" name="course" placeholder="Enter Course">
        <br>
        <br>
        <input type="text" name="batch" placeholder="Enter Batch">
        <br>
        <br>
        <input type="text" name="city" placeholder="Enter City">
        <br>
        <br>
        <input type="text" name="year" placeholder="Enter Year">
        <br>
        <br>
        <button name="btn" type="submit">Submit</button>
    </form>
</body>
</html>