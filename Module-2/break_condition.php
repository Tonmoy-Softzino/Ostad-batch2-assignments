<?php
    $a=0;$b=1;
    echo $a . "\n";
    echo $b . "\n";
    for($i=3; $i<=20; $i++){
        $c=$a+$b;
        if($c>100){
            break;        
        }
        
        echo $c . "\n";
        $a=$b;
        $b = $c;
    }
?>

