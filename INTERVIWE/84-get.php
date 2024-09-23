<?php

class User
{

    public $name = "anik";

    function __get($property)
    {
        echo "this $property is not exist";
    }
}


$user = new User();


echo $user->nae;
