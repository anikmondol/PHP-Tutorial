 <?php

 $h1_color = "red";

echo "<h1 style='color:red'> php with html </h1>";
echo "<h3 style='color:green'> php with html </h3>";

?>

<?php

$name = "Anik";
$class = 12;
$age = 24;


echo "<h1 style='color:blue'>My Name is $name <h1/>";
?>


 



 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <h1 style='<?= "color: $h1_color" ?>'>my fake name is <?= "$name" ?> </h1>
    <h1 style='<?= "color: $h1_color" ?>'>my age is <?= "$age" ?> </h1>
    <h1 style='<?= "color: $h1_color" ?>'>my class is <?= "$class" ?> </h1>

 </body>
 </html>