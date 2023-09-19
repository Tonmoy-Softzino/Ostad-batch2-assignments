<?php
    function printNum($num){
        if($num%2==0){
            echo $num . "\n";
        }
    }
    echo "Using For loop: \n";
    for($i=1; $i<=20; $i++){
        printNum($i);
    }
    echo "Using while loop: \n";
    $n=1;
    while($n<=20){
        printNum($n);
        $n++;
    }
    echo "Using do while loop: \n";
    $x=1;
    do{
        printNum($x);
        $x++;
    } while($x<=20)
?>

