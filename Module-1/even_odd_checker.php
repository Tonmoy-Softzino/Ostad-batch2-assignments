<?php
$input = (int)readline('Enter a Number: ');
if($input===0){
    echo "This is Zero";
}
else if($input%2===0){
    echo "This is a Even number";
}
else{
    echo "This is a Odd number";
}
?>