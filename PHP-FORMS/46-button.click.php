<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    <button name="btn"> call function </button>
</form>
    
</body>
</html>


<?php

function function_call() {
    echo "<br>";
    echo "<br>";
    return "function call";
   
    
}


if (isset($_REQUEST['btn'])) {
    echo function_call();
}

?>