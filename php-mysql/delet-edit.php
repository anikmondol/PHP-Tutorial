<?php

include("./config.php");

$students = $conn->prepare("select * from students");
$students->execute();
$results = $students->fetchAll();



if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $students = $conn->prepare("delete  from students where id='$id'");
$students->execute();

if ($students->execute()) {
    echo true;
} else {
    echo false;
}


}



echo "<table border='1'>";

echo "<tr>
    <td> name </td>
    <td> coures </td>
    <td> batch </td>
    <td> year </td>
    <td> edit </td>
    </tr>";

foreach ($results as $result) {
    echo "<tr>
    <td>" . $result['name'] . "</td>
    <td>" . $result['coures'] . "</td>
     <td>" . $result['batch'] . "</td>
      <td>" . $result['year'] . "</td>
      <td> 
      <form method='post' action='./delet-edit.php'>
      <button type=submit name='delete' value=".$result['id'].">Delete</button>
      </form>
      </td>
    </tr>";
}

echo "</table>";





?>
