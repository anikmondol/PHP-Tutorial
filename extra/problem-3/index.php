<?php


session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index_post.php" method="post">
        <input  max="6" name="value" type="number" placeholder="enter number">
        <!-- win -->
        <p style="font-size:20px; color:green">
        <?php if (isset($_SESSION["win"])) {
           echo $_SESSION["win"]; 
        } unset( $_SESSION["win"]);?>
        </p>

        <!-- loss -->
        <p style="font-size:20px; color:red">
        <?php if (isset($_SESSION["loss"])) {
           echo $_SESSION["loss"]; 
        } unset( $_SESSION["loss"]);?>
        </p>

        <button name="submit" type="submit">submit</button>
    </form>
</body>
</html>