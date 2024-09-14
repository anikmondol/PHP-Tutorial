

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="btn1">Call Function</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['btn'])) {
    btn_test();
}

function btn_test() {
    echo 3;
}

?>