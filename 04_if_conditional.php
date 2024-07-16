<?php

/*

# If conditional statement
// If some condition is true, do something
// If condition is false, don't it



***relational operatot

>(greater than)
<(less than)
>=(greater than equal to)
<=(less to equal to)
==(equal to equal to)
!(not)



*/ 


// $age = -1;

// if($age >= 18){
//     echo "you can vote";
// }elseif($age <= 0){
//     echo "Invalid age";
// }else{
//     echo "You can't vote";
// }


$hours = 20;
$rate =  10;
$weekpay = 0;


if($hours === 0){
    $weekpay = $hours * $rate;
    echo "Your weekly paymetn is : $weekpay tk";

}elseif($hours < 0){
    echo "sorry you get nagitive ";
}

elseif($hours <= 40){
    $weekpay = $hours * $rate;
    echo "Your weekly paymetn is : $weekpay tk";
}else{
    $weekpay = (40 * $rate) +( ($hours - 40) *( $rate * 1.5));
    echo "Your weekly paymetn is : $weekpay tk";
}








?>