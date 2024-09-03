<?php
$h2_color = "yellow";
echo "<h1 style='color:green'>php with html</h1>";
echo "<h3 style='color:red'>php with html</h3>";
?>


<?php

$name = "anil sidhu";
echo "<h1 style='color:blue'>my name is $name</h1>";

?>

<h1 style="color:blueviolet">tumer name ki <?= $name ?></h1>

<h2 style="color:<?= $h2_color ?>"><?= $name ?></h2>
<h2 style="color:<?= $h2_color ?>">My <?= $name ?></h2>
<h2 style="color:<?= $h2_color ?>"><?= "This is h2 tag" ?></h2>
