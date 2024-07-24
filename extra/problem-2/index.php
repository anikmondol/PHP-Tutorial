<?php

$color1 = random_int(1, 255);
$color2 = random_int(1, 255);
$color3 = random_int(1, 255);

$rgb = ''. $color1 .','. $color2 .','. $color3 .'';

echo $rgb;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container">
    <div class="box" style="background: rgb(<?php echo $rgb;?>);">
    <h3>RGB: <?php echo $rgb;?></h3>
    </div>
    </div>
</body>
</html>