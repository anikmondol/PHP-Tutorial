<?php

include("config.php");


class Student{

    public $DBconn;

    public function __construct($conn)
    {
        $this->DBconn=$conn;
    }

    public function getDate(){
        $getStudents= $this->DBconn->prepare("SELECT * FROM `students`");
        $getStudents->execute();
        return $getStudents->fetchAll();
    }

    public function insertDate(){
        $sqlQuery = "INSERT INTO `students`(`id`, `name`, `coures`, `batch`, `city`, `year`) VALUES (null,'shove','hsc','evening','dhaka','22-23')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

        // if ($result) {
        //     echo true;
        // } else {
        //     echo false;
        // }

    }


    public function update(){
        $sqlQuery = "UPDATE `students` SET `id`=146,`name`='Ritu Roy',`coures`='bba',`batch`='evening',`city`='delhi',`year`='10' WHERE id=146";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

    }


    public function delete(){
        $sqlQuery = "DELETE FROM `students` WHERE id=144";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

    }


    public function insertDateWithRequest($request){

        $name = $request['name'];
        $coures = $request['coures'];
        $batch = $request['batch'];
        $city = $request['city'];
        $year = $request['year'];


        $sqlQuery = "INSERT INTO `students`(`id`, `name`, `coures`, `batch`, `city`, `year`) VALUES (null,'$name','$coures','$batch','$city','$year')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

        header("location: student.html");

       

    }
    

}

$student = new Student($conn);
$result = $student->getDate();
// $student->insertDate();
// $student->delete();
// $student->update();







// echo "<table border>";
// echo "<tr>
//     <td> name </td>
//     <td> coures </td>
//     <td> batch </td>
//     <td> year </td>
//     </tr>";
// foreach ($result as $student) {
//     echo "<tr>
//     <td>" . $student['name'] . "</td>
//     <td>" . $student['coures'] . "</td>
//      <td>" . $student['batch'] . "</td>
//       <td>" . $student['year'] . "</td>
//     </tr>";
// }

// echo "</table>";




if (isset($_POST['btn'])) {
    $student->insertDateWithRequest($_POST);
}


?>

