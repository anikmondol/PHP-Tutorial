
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $users = [
        [1, "anil", "nodia", "abc@gmail.com"],
        [2, "sam", "delhi", "sam@gmail.com"],
        [3, "peter", "gurugram", "peter@gmail.com"],
    ];

    echo "<table border='1'>";

    for ($i = 0; $i < count($users); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($users[$i]); $j++) {
            echo "<td>";
            echo $users[$i][$j];
            echo "</td>";
        }
        "<tr>";
    }

    echo "<table/>";
    ?>
</body>

</html>