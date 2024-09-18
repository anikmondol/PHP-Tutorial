<?php

class User{

    public  function __invoke(){
        echo "my name is anik mondal";
    }

    public function other(){
        echo 121;
    }
    


}

$user = new User();

$user();

$user->other();


?>