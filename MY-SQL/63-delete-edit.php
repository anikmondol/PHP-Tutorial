<?php

session_start();

include("./60-config.php");

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];
    $delete = $conn->prepare("DELETE FROM `students` WHERE id='$id'");
    $delete->execute();
    $_SESSION["delete_done"] = "delete successful !!!";
    header("location: 60-read.php");
}



if (isset($_REQUEST['edit_id'])) {
    $id = $_REQUEST['edit_id'];
    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch = $_REQUEST['batch'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];

    $delete = $conn->prepare("UPDATE `students` SET `id`=$id,`name`='$name',`course`='$course',`batch`='$batch',`city`='$city',`year`='$year' WHERE id=$id");
    $delete->execute();
    $_SESSION["update_done"] = "update successful !!!";
    header("location: 60-read.php");
   
}

