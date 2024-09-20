<?php

$file = "anik.text";
$my_file = fopen($file, "r");
echo fread($my_file, filesize($file));
fclose($my_file);

?>