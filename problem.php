<?php


// $arr = [41, 11, 50, 87, 92, 74, 33];

// $count = count($arr);
// $sort_arr = [];




// for ($i=0; $i < $count ; $i++) { 
//     // echo $arr[$i];
//     if($arr[0] > $arr[$i]){
//         $fist = $arr;
//         array_push($sort_arr, $fist);
//     }

// }



// print_r($sort_arr);


$a= [52, 44, 71, 81, 40, 10, 47];
// print_r(array_unique($a));
// print_r(array)
// delete $a[2];
// print_r(delete);
// array_splice($a, 2);

// $asd = array_splice(min($a));


// print_r();

$my_min = min($a);

array_splice($a, $my_min, 1);

print_r($a);



?>