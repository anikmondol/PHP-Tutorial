<!-- <?php

// if (isset($_POST['btn'])) {
//     include('./config.php');

//     $name = $_POST['name'];
//     $coures = $_POST['coures'];
//     $batch = $_POST['batch'];
//     $city = $_POST['city'];
//     $year = $_POST['year'];

//     $student = $conn->prepare("
// INSERT INTO `students` (`id`, `name`, `coures`, `batch`, `city`, `year`) VALUES (NUll, '$name', '$coures', '$batch', '$city', '$year');
// ");

//     $result = $student->execute();

//     if ($result) {
//         echo "Date inserted";
//     } else {
//         echo "error";
//     }
// } else {
//    echo 'error';
// }



?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./insert.php" method="post">
        <input type="text" placeholder="enter name" name="name">
        <br>
        <br>
        <input type="text" placeholder="enter coures" name="coures">
        <br>
        <br>
        <input type="text" placeholder="enter batch" name="batch">
        <br>
        <br>
        <input type="text" placeholder="enter city" name="city">
        <br>
        <br>
        <input type="text" placeholder="enter year" name="year">
        <br>
        <br>
        <button type="submit" name="btn">Add New Student</button>

    </form>
</body>

</html>