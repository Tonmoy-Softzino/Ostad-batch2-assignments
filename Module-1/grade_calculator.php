<?php
$test_1 = (int)readline('Enter Test score 1: ');
$test_2 = (int)readline('Enter Test score 2: ');
$test_3 = (int)readline('Enter Test score 3: ');
$average = ($test_1+$test_2+$test_3)/3;
if($average>=80){
    echo "Grade A";
}
else if($average>=70){
    echo "Grade B";
}
else if($average>=60){
    echo "Grade C";
}
else if($average>=50){
    echo "Grade D";
}
else if($average>=40){
    echo "Grade E";
}
else{
    echo "Fail";
}
?>