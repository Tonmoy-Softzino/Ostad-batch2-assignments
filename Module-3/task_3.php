<?php
$grades = [85,92,78,88,95];

function sorting(&$num){
    rsort($num);
}

sorting($grades);
foreach($grades as $value){
    echo $value . "\n";
}
?>
