<?php

$users = [
    [1, "anik", 'anik@gamil.com'],
    [2, "apu", 'apu@gamil.com'],
    [3, "joy", 'joy@gamil.com'],
]



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
            foreach ($users as $value) {

            ?>
                <tr>
                    <td><?= $value['0'] ?></td>
                    <td><?= $value['1'] ?></td>
                    <td><?= $value['2'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>