<?php

class User{

    private function getName($name){
        echo $name;
    }

    public function __call($method, $argc){
        // echo "$method method not found";
        // echo "<br>";
        // print_r($argc);

        if (method_exists($this, $method)) {
            // echo "$method is a private method";
            call_user_func_array([$this, $method], $argc);
        }else{
            echo "$method method not found";
        }

    }


}

$user = new User();

$user->getName("anik");

?>