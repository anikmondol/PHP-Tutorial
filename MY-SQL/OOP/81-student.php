<?php

include("./config.php");

class Student
{

    public $DBconn;

    public function __construct($conn)
    {
        $this->DBconn = $conn;
    }

    public function getDate()
    {
        $getStudents = $this->DBconn->prepare("SELECT * FROM `students`");
        $getStudents->execute();
        $result = $getStudents->fetchAll();
        if ($result) {
            return $result;
        } else {
            echo false;
        }
    }

    public function insertDate($name, $course, $batch, $city, $year)
    {
        $sqlQuery = ("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'$name',' $course','$batch','$city','$year')");
        $student = $this->DBconn->prepare($sqlQuery);
        $student->execute();
    }

    public function dateUpdate($id,$name, $course, $batch, $city, $year)
    {
        $sqlQuery = "UPDATE `students` SET `id`=$id,`name`='$name',`course`='$course',`batch`='$batch',`city`='$city',`year`='$year' WHERE id=$id";
        $student = $this->DBconn->prepare($sqlQuery);
       $student->execute();
    }

    public function delete_date($id)
    {

        $sqlQuery = "DELETE FROM `students` WHERE id=$id";
        $student = $this->DBconn->prepare($sqlQuery);
         $student->execute();
    }
}








$student = new Student($conn);


if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];
    $student->delete_date($id);
}

if (isset($_REQUEST['insert'])) {
    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch = $_REQUEST['batch'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];

    $student->insertDate($name, $course, $batch, $city, $year);
}

if (isset($_REQUEST['update'])) {


    $id = $_REQUEST['edit_id'];
    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch = $_REQUEST['batch'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];
    $student->dateUpdate($id,$name, $course, $batch, $city, $year);
}



$aj = $student->getdate();
?>


<!DOCTYPE html>
<html lang="en">

<?php
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_SESSION['delete_done'])) :  ?>

        <p>
            <?= $_SESSION["delete_done"]; ?>
        </p>
    <?php endif;
    unset($_SESSION['delete_done']); ?>

    <?php if (isset($_SESSION['update_done'])) :  ?>

        <p>
            <?= $_SESSION["update_done"]; ?>
        </p>
    <?php endif;
    unset($_SESSION['update_done']); ?>



    <thead>
        <details>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo natus praesentium ratione, aliquam harum rerum laudantium quod nihil magnam, placeat exercitationem architecto doloremque officia mollitia tempora beatae! Deserunt, obcaecati eveniet!</details>
    </thead>
    <table border="1">
        <thead>
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Course</td>
                <td>Batch</td>
                <td>City</td>
                <td>Year</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 1;
            foreach ($aj as $key => $value) :
            ?>
                <tr>
                    <td><?= $num++; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['course']; ?></td>
                    <td><?= $value['batch']; ?></td>
                    <td><?= $value['city']; ?></td>
                    <td><?= $value['year']; ?></td>
                    <td>
                        <a style="margin-right: 10px;" href="./81-student.php?delete_id=<?= $value['id'] ?>">delete</a>
                        <a href="./82-edit.php?edit_id=<?= $value['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <div>
        <a href="./82-student.php">insert-page</a>
    </div>
</body>

</html>