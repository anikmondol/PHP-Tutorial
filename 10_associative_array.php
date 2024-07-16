<?php

/*

<?php foreach($employess as $key => $value){?>

<p><b><?php echo ucwords($key);?> : </b> <?php echo $value;?></p>

<?php }?>


*/ 



$employess = array(
   "anik" => "Software Enginer",
   "apu" =>  "Web Developer",
   "joy" =>  "Web Designer",
   "roy" => "App Developer"
);


// echo "<pre>";
// print_r($employess);
// $keys = array_keys($employess);
// $values = array_values($employess);
// print_r($values);
// $rev_array = array_flip($employess);
$rev_array = array_reverse($employess);
print_r($rev_array);


// ?>

