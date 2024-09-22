<?php
include("./60-config.php");


$get_student = $conn->prepare("SELECT * FROM `students`");
$get_student->execute();
$results = $get_student->fetchAll();

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
    <br>
    <div>
        <a href="./61-insert.php">insert-page</a>
    </div>
</body>

</html>