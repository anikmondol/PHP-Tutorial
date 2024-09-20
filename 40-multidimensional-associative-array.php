<?php

$users = [
    ['name' => "anik", "age" => 24, "city" => "dhaka"],
    ['name' => "joy", "age" => 20, "city" => "kolkata"],
    ['name' => "apu", "age" => 22, "city" => "delhi"],
    ['name' => "sam", "age" => 19, "city" => "noida"]
];


?>


<!DOCTYPE html>
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
            <?php

            $a = 1;

            foreach ($users as $value) {

            ?>
                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['city'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>