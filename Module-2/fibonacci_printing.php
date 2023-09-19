<?php
    $a=0;$b=1;
    function printFib($i){
        if($i==1){
            echo 0 . "\n";
            return;
        }
        if($i==2){
            echo 1 . "\n";
            return;
        }
        global $a,$b;
        echo $a+$b . "\n";
        $c = $a+$b;
        $a = $b;
        $b = $c;
    }
    for($i=1; $i<=15; $i++){
        printFib($i);
    }
?>

