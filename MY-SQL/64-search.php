<?php

include "./60-config.php";

if (isset($_REQUEST['search'])) {
   $search = $_REQUEST['search'];
   $get_student = $conn->prepare("SELECT * FROM `students` WHERE name like '%$search%'");
   $get_student->execute();
   $results = $get_student->fetchAll();
  

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
        <input type="text" name="search" placeholder="enter your name">
        <button name="btn">Search</button>
    </form>
    <br>
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
            foreach ($results as $key => $value) :
            ?>
                <tr>
                    <td><?= $num++; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['course']; ?></td>
                    <td><?= $value['batch']; ?></td>
                    <td><?= $value['city']; ?></td>
                    <td><?= $value['year']; ?></td>
                    <td>
                        <a style="margin-right: 10px;" href="./63-delete-edit.php?delete_id=<?= $value['id'] ?>">delete</a>
                        <a href="./63-edit.php?edit_id=<?= $value['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>


