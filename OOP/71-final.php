<?php

//  final class Honda{


// }


// class Cars extends Honda{

// }

// $cars = new Cars();


class Honda{

    final function company_name(){
        echo "Honda";
    }

} 


class Cars extends Honda{

    // function company_name(){
    //     echo "Honda city";
    // }

}


$cars = new Cars();

$cars->company_name();


?>