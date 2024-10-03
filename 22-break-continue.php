<?php

// for ($i=1; $i < 11; $i++) { 
//     echo $i;
//     echo "<br>";
//     if ($i == 5) {
//         break;
//     }
// }


for ($i=1; $i < 11; $i++) { 
    if ($i == 5) {
        continue;
    }

    echo $i;
    echo "<br>";


}


?>