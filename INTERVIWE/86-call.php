
<?php

class User
{

     function getName($name)
    {
        echo "$name";
    }

    function __call($name, $arguments)
    {
        // echo "$name no found";
        // echo "<br>";
        // print_r($arguments);

        if (method_exists($this, $name)) {
            // echo "this is private method";
            call_user_func([$this,$name],$arguments);
        } else {
            // echo "$name no found";
            // echo "<br>";
            // print_r($arguments);



        }
    }
}

$user = new USer();

$user->getName(4444);


?>