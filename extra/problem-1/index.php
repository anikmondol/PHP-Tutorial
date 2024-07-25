<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <form action="index_post.php" method="post">

        <input name="value" type="text" placeholder="your value: ">

        <!-- ok -->
        <p style="margin:0; color: red;">
            <?php
            if (isset($_SESSION['ok'])) {
                echo $_SESSION['ok'];
                session_unset();
            }
            ?>
        </p>
        <button name="submit" style="margin-top: 1rem;" type="submit">submit</button>

        <!-- error -->
        <p style="margin:0; color: red;">
            <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                session_unset();
            }
            ?>
        </p>

    </form>


</body>

</html>