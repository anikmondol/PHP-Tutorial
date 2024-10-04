<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <button name="btn" value="btn-button">Call Function</button>
    </form>
</body>
</html>


<?php

if (isset($_POST['btn'])) {

    function call_btn(){
        echo "function called";
    }

    call_btn();
    
}



?>