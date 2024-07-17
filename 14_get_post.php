<?php

/* 
## $_GET, $_POST

php special / super golbal variable used to collect data from the html form, whan data is sent to a file via action attribut in the <form> tag.

<form action="some_file.php" mathod="post">


*/



// print_r($_GET);

// // get method

// if (isset($_GET["submit"])) {
   
    


//     if(empty($_GET["username"])){
//         echo "User Name is empty <br>";
//     }else{
//         echo $_GET["username"] . "<br>";
//     }

//     if(empty($_GET["password"])){
//         echo "possword Name is empty ";
//     }else{
//         echo $_GET["password"];
//     }



// }



// post method

if (isset($_POST["submit"])) {
   
    


    if(empty($_POST["username"])){
        echo "User Name is empty <br>";
    }else{
        echo $_POST["username"] . "<br>";
    }

    if(empty($_POST["password"])){
        echo "possword Name is empty ";
    }else{
        echo $_POST["password"];
    }



}







?>


<br><br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="14_get_post.php" method="POST">
        <div>
            <label>User Name: </label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <button name="submit" type="submit">submit</button>
        </div>
    </form>
    <br><br><br><br>
    <a href="14_get_post.php">Home</a>
</body>

</html>