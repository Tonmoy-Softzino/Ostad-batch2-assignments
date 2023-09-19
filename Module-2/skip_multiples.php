<?php
    echo "Print Numbers from 1 to 50 except multiples of 5: \n";
    for($i=1; $i<=50; $i++){
        if($i%5==0)
            continue;
        else
            echo $i . "\n";
    }
?>

