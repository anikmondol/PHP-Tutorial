<?php

class User{
    
    public function __invoke()
    {
        echo "my name is anik";
    }
}


$user = new User();

$user();

?>