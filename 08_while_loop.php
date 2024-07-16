<?php

## while loop = repeat some code a certain period time

// $a = 0;

// while ($a <= 20) {
//     echo $a . "<br>";
//     $a++;
// }

// echo "out of anik";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 0;

    while ($a <= 9) {
        
        $a++;
    ?>
    <p>anik <?php echo "$a"?></p>

    <?php } ?>

</body>

</html>