<?php

include('./config.php');

// $students = $conn->prepare("delete from students where id='125'");
// $students->execute();

$students = $conn->prepare("select * from students");
$students->execute();
$results = $students->fetchAll();

echo "<table border='1'>";




foreach ($results as $student) {
    echo "<tr>  
    
    <td>" . $student['name'] . "</td>
    <td>" . $student['coures'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>
        <form method='post'>
        <button name='btn' value=" . $student['id'] . ">Delete</button>
        </form>
    </td>
    <td>
       <a href='update.php?id=". $student['id'] ."'>Update</a>
    </td>
     </tr>";
}



echo "</table>";


if (isset($_POST['btn'])) {
    
    $id =  $_POST['btn'];

    $students = $conn->prepare("delete from students where id='$id'");
    $students->execute();
}


