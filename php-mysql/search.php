<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="search" placeholder="search here">
        <button>Search</button>
        <br>
        <br>
    </form>
</body>
</html>

<?php
include('./config.php');

if (isset($_POST['search'])) {
   $search = $_POST['search'];

//    $student = $conn->prepare("select * from students where name='$search'");

$student = $conn->prepare("select * from students where name like '%$search%'");
   $student->execute();
   $result = $student->fetchAll(); 

   echo "<table border>";
   echo "<tr>
       <td> name </td>
       <td> coures </td>
       <td> batch </td>
       <td> year </td>
       </tr>";
   foreach ($result as $student) {
       echo "<tr>
       <td>" . $student['name'] . "</td>
       <td>" . $student['coures'] . "</td>
        <td>" . $student['batch'] . "</td>
         <td>" . $student['year'] . "</td>
       </tr>";
   }
   
   echo "</table>";



}




?>