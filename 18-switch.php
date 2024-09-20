<?php

$favorite_color = "red";

switch ($favorite_color) {
    case 'red':
        echo "$favorite_color is my favorite color";
        break;
    case 'blue':
        echo "$favorite_color is my friend favorite color";
        break;
    case 'yellow':
        echo "$favorite_color is my brother favorite color";
        break;

    default:
        echo "unknown";
        break;
}
