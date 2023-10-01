<?php
$studentGrades = [
    "Student-1"=>["Math" => 78,"English" => 98,"Science" => 88],
    "Student-2"=>["Math" => 88,"English" => 58,"Science" => 78],
    "Student-3"=>["Math" => 98,"English" => 78,"Science" => 89]
];

function calGrade($data){
    return (($data['Math']+$data['English']+$data['Science'])/3);
}

foreach($studentGrades as $key => $value){
    echo $key." grade is ".calgrade($value) ."%". "\n";
}
?>
