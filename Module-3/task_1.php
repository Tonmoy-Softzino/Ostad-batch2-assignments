<?php
$text = "The quick brown fox jumps over the lazy dog";

function subStringConvert($str){
    return str_replace("brown","red",$str);
}
echo subStringConvert($text);
?>
