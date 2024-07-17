<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="16_check_boxes.php" method="post">
        <label >Your Favourite Food</label><br>
        <input type="checkbox" name="foods[]" value="Fastfood"> Fastfood <br>
        <input type="checkbox" name="foods[]" value="Sweets"> Sweets <br>
        <input type="checkbox" name="foods[]" value="Namkeen"> Namkeen <br>
        <input type="checkbox" name="foods[]" value="Street Food"> Street Food <br>

        <input type="submit" value="submit" name="submit">

    </form>
    <br>

    <?php
    
    if(isset($_POST["submit"])){

        // echo "<pre>";
        // print_r($_POST);

        // if(isset($_POST["Fastfood"])){
        //     echo  "You have selected: " . $_POST["Fastfood"];
        // }

        $foods = $_POST["foods"];

        // foreach ($foods as $food) {
        //     echo "You have selected: ". $food . "<br>";
        // }

        foreach ($foods as $key => $value) {
            echo "you have selected: " . $value . "<br>";
        }



    }


    ?>


</body>
</html>