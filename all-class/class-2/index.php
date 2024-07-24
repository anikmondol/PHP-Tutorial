 <?php

    //  $x = "hello";
    //  $y = 78;
    //  $z = 98.22;
    //  $a = true;
    // $info = [
    //     "house_name" => "Molla House",
    //     "house_rent" => 1700 . "tk",
    //     "water_rent" => 500.71,
    //     "maid" => true,

    // ];

    // var_dump($info);

    //  $arr = [
    //     "name" => "fahim",
    //     "age" => 80,
    //     "house info" => $info,
    //     "Boold Group" => "A+",
    //     "connect" => "018*****"

    //  ];


    //  echo $z;
    // var_dump($x);
    // var_dump($y);
    // var_dump($z);
    // var_dump($a);
    // var_dump($arr);
    // print_r($arr["house info"]["house_rent"]);
    // var_dump($arr["house info"]["house_rent"]);




    /*

php operator

1. arithmetic operator
2. assignment operator
3. comparison operator
4. logical operator
5. increment / decrement operator
6. string operator
7. bite operator
8. ternary operator


*/

    // $age = 17;


    // if ($age >= 18) {
    //     echo "Boyos hoise beta biya to kor";
    // } else {
    //     echo "ekhono bacca, age game khela sik";
    // }



    // $age = 17;

    // if ($age >= 18) {
    //     echo "you can vote";
    // } else {
    //     echo "you can't vote";
    // }


    // $number = 551;


    // if($number % 2 === 0){
    //     echo "This number is even";
    // }else{
    //     echo "This number is odd";
    // }



    // $leap_year = 2001;


    // if (($leap_year % 4 === 0) && ($leap_year % 400 === 0 || $leap_year % 100 != 0)) {
    //     echo "$leap_year is leap year";
    // } else {
    //     echo "$leap_year is not leap year";
    // }


    // $color = "blue";


    // if ($color === "red") {
    //     echo "This color red";
    // }elseif ($color === "green") {
    //     echo "This color green";
    // }elseif ($color === "blue") {
    //     echo "This color blue";
    // }elseif ($color === "yellow") {
    //     echo "This color yellow";
    // } else {
    //     echo "This color is none";
    // }




   

    // switch (true) {
    //     case ($mark <= 100 && $mark >= 80):
    //         echo "A+";
    //         break;

    //     case ($mark <= 79 && $mark >= 70):
    //         echo "A";
    //         break;

    //     case ($mark <= 69 && $mark >= 60):
    //         echo "A-";
    //         break;

    //     case ($mark <= 59 && $mark >= 50):
    //         echo "B";
    //         break;

    //     case ($mark <= 49 && $mark >= 40):
    //         echo "C";
    //         break;

    //     case ($mark <= 39 && $mark >= 30):
    //         echo "C";
    //         break;

    //     case ($mark < 0):
    //         echo "you got negative mark";
    //         break;


    //     default:
    //         echo "F";
    //         break;
    // }


    $mark = 79.9;


    if ($mark <= 100 && $mark >= 80) {
       echo "A+";
    }elseif($mark <= 89.9 && $mark >= 70){
        echo "A";
    }elseif($mark <= 69.9 && $mark >= 60){
        echo "A-";
    }elseif($mark <= 69.9 && $mark >= 50){
        echo "B";
    }elseif($mark <= 49.9 && $mark >= 40){
        echo "C";
    }elseif($mark <= 39.9 && $mark >= 30){
        echo "D";
    }elseif($mark <= 29.9 && $mark >= 0){
        echo "F";
    }elseif($mark < 0){
        echo "you got negative mark";
    }else {
        echo "i have not found";
    }
    

   
    

















    ?>