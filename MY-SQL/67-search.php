<?php

include("./61-config.php");

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    // $get_students = $conn->prepare("SELECT * FROM `students` where name='$search'");

    $get_students = $conn->prepare("SELECT * FROM `students` where name like '%$search%'");

    $get_students->execute();

    $students = $get_students->fetchAll();
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
        <input type="text" name="search" placeholder="search here...">
        <button name="btn">Click</button>
    </form>
    
    <?php if (isset($_SESSION['update_done'])) :  ?>

        <p>
            <?= $_SESSION["update_done"]; ?>
        </p>
    <?php endif;
    unset($_SESSION['update_done']); ?>

    <table border="1">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
                <th colspan="2">Action</th>
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
                    <td>
                        <a href="66-update.php?id=<?= $student['id'] ?>">
                            <button type="submit" name="delete">Update</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>


<?php

include("./61-config.php");

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    $get_students = $conn->prepare("SELECT * FROM `students` where name='$search'");

    $get_students->execute();

    $students = $get_students->fetchAll();
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
    
</body>
</html>