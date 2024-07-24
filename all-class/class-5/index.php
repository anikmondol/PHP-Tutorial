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
    <!-- <input name="username" type="text" placeholder="enter value"> -->
    <!-- <input name="password" type="password" placeholder="enter password"> -->
    <!-- <button type="submit" name="submit">submit</button> -->

<input type="text" name="year" placeholder="enter your value">

<!-- error -->
<?php if (isset($_SESSION["error"])) {
?>
<p style="color:red; font-size: 20px">
    <?php echo $_SESSION["error"]; ?>
</p>
<?php } unset($_SESSION["error"]);?>

<!-- success -->
<?php if (isset($_SESSION["success"])) {
?>
<p style="color:green; font-size: 20px">
    <?php echo $_SESSION["success"]; ?>
</p>
<?php } unset($_SESSION["success"]);?>

<button type="submit" name=submit>submit</button>




    </form>
</body>
</html>