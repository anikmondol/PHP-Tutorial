<?php
include('./config.php');

$get_students = $conn->prepare("select * from students");
$get_students->execute();
$students = $get_students->fetchAll();

// echo "<pre>";

// print_r($students);

// echo "<pre>"

echo "<table border>";
echo "<tr>
    <td> name </td>
    <td> coures </td>
    <td> batch </td>
    <td> year </td>
    </tr>";
foreach ($students as $student) {
    echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['coures'] . "</td>
     <td>" . $student['batch'] . "</td>
      <td>" . $student['year'] . "</td>
    </tr>";
}

echo "</table>";
