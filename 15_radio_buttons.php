<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="15_radio_buttons.php" method="post">

        <label>Select any course</label><br>
        <input type="radio" name="course" value="BCA"> BCA <br>
        <input type="radio" name="course" value="MC"> MC <br>
        <input type="radio" name="course" value="MA"> MA <br>

        <input type="submit" name="submit" value="confirm">

    </form>
    <br>

    <?php

    // if (isset($_POST["submit"])) {
    //     if ((isset($_POST["course"]))) {
    //         $course = $_POST["course"];
    //         if ($course === "BCA") {
    //             echo "you selected the course: " . $course;
    //         } elseif ($course === "MC") {
    //             echo "you selected the course: " . $course;
    //         } elseif ($course === "MA") {
    //             echo "you selected the course: " . $course;
    //         }
    //     }else{
    //         echo " Please select any of the course";
    //     }  
    // }

    if (isset($_POST["submit"])) {
        if ((isset($_POST["course"]))) {
            $course = $_POST["course"];

            switch ($course) {
                case ($course === "BCA"):
                    echo "you selected the course: " . $course;
                    break;


                case ($course === "MC"):
                    echo "you selected the course: " . $course;
                    break;

                case ($course === "MA"):
                    echo "you selected the course: " . $course;
                    break;

                default:
                    echo "sorry";
                    break;
            }
        }else{
            echo " Please select any of the course"; 
        }
    }


    ?>


</body>

</html>