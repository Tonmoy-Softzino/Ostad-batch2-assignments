<?php
$input = (int)readline('Enter current Temperature: ');
if($input<=5){
    echo "It's freezing!";
}
else if($input<=25){
    echo "It's cool!";
}
else if($input>=26){
    echo "It's warm!";
}
?>