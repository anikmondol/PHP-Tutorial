<?php

include("./87-config.php");

class Student
{

    public $DBconn;

    public function __construct($conn)
    {
        $this->DBconn = $conn;
    }


    public function insertDate($request)
    {

        $name = $request['name'];
        $course = $request['course'];
        $batch =  $request['batch'];
        $city =  $request['city'];
        $year =  $request['year'];

        $sqlQuery = "INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'$name','$course','$batch','$city','$year')";
        $getStudents = $this->DBconn->prepare("$sqlQuery");
        $getStudents->execute();
        $getStudents->fetchAll();
    }

    public function updateDate()
    {
        $sqlQuery = "UPDATE `students` SET `name`='apu',`course`='cst',`batch`='Morning',`city`='Mumbai',`year`='2nd' WHERE id=50";
        $getStudents = $this->DBconn->prepare("$sqlQuery");
        $getStudents->execute();
        $getStudents->fetchAll();
    }


    public function delateDate($id)
    {
        $sqlQuery = "DELETE FROM `students` WHERE id=$id";
        $getStudents = $this->DBconn->prepare("$sqlQuery");
        $getStudents->execute();
        $getStudents->fetchAll();
    }

    public function getDate()
    {
        $getStudents = $this->DBconn->prepare("SELECT * FROM `students`");
        $getStudents->execute();
        $result = $getStudents->fetchAll();
        return $result;
    }
}


$student = new Student($conn);

$students = $student->getDate();

if (isset($_REQUEST['insert_btn'])) {
    $student->insertDate($_REQUEST);
}

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];
   $student->delateDate($id);
}


// $student->insertDate();
// $student->updateDate();
// $student->delateDate();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>s.n</th>
                <th>name</th>
                <th>course</th>
                <th>batch</th>
                <th>city</th>
                <th>year</th>
                <th colspan="3">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 1;
            foreach ($students as $key => $student) {
            ?>
                <tr>
                    <td> <?= $num++; ?> </td>
                    <td> <?= $student['name'] ?> </td>
                    <td> <?= $student['course'] ?> </td>
                    <td> <?= $student['batch'] ?> </td>
                    <td> <?= $student['city'] ?> </td>
                    <td> <?= $student['year'] ?> </td>
                    <td>
                        <a href="87-student.php?delete_id=<?= $student['id'] ?>">
                            <button type="submit" name="delete">Delete</button>
                        </a>
                    </td>
                    <td>
                        <a href="88-update.php?update_id=<?= $student['id'] ?>">
                            <button type="submit" name="delete">Update</button>
                        </a>
                    </td>
                    <td>
                        <a href="88-insert.php">
                            <button type="submit" name="delete">Insert</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>