<?php
include("./61-config.php");

// $students = $conn->prepare("DELETE FROM `students` WHERE id='18'");

// $students->execute();

// $student_date = $students->fetchAll();


if (isset($_REQUEST['delete'])) {
    $delete = $_REQUEST['delete'];
    $students = $conn->prepare("DELETE FROM `students` WHERE id='$delete'");
    if ($students->execute()) {
        echo "date is delete";
    }else{
        echo "sorry try more";
    }
}


$get_students = $conn->prepare("SELECT * FROM `students`");

$get_students->execute();

$students = $get_students->fetchAll();






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
                <th>S.N</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 1;
            foreach ($students as $key => $student) { ?>
                <tr>
                    <td> <?= $num++; ?> </td>
                    <td> <?= $student['name'] ?> </td>
                    <td> <?= $student['course'] ?> </td>
                    <td> <?= $student['batch'] ?> </td>
                    <td> <?= $student['city'] ?> </td>
                    <td> <?= $student['year'] ?> </td>
                    <td>
                        <form action="" method="post">
                            <button type="submit" name="delete" value="<?= $student['id'] ?>">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>


<?php




?>