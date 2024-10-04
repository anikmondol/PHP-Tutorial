<?php

$users = [

    [1, "anik", "dhaka", "abc@gmail.com"],
    [2, "roy", "kolkata", "extra@gmail.com"],
    [2, "shove", "delhi", "sh@gmail.com"],

];


// for ($i = 0; $i < count($users); $i++) {
//     for ($j = 0; $j < count($users[$i]); $j++) {
//         echo $users[$i][$j];
//         echo "<br>";
//     }
// }


// foreach ($users as $key => $values) {
//     foreach ($values as $key => $value) {
//         echo $value;
//         echo "<br>";
//     }
// }

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value) {
            ?>
                <tr>
                    <td> <?= $value[0] ?></td>
                    <td> <?= $value[2] ?></td>
                    <td> <?= $value[3] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</body>

</html> -->


<?php


echo "<table border=1>";

for ($i = 0; $i < count($users); $i++) {

    echo "<tr>";

    for ($j = 0; $j < count($users[$i]); $j++) {

        echo "<td>";

        echo $users[$i][$j];

        echo "</td>";

    }




}   

echo "</table>";


?>