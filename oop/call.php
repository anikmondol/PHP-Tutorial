<?php

class User{


   private function getName($name){
        echo "user name is $name";
    }

    function __call($name, $arguments)
    {
        // echo "$name not found";
        // echo "<br>";
        // print_r($arguments);

        if (method_exists($this,$name)) {
            // echo true;
            call_user_func_array([$this,$name],$arguments);
        } else {
            echo false;
        }
        



    }

}

$user = new User();

$user->getName("anik", "mondal");


?>