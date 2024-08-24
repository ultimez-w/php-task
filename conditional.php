<?php
$marks1=28;
$marks2=67;
$marks3=95;

function evaluateMarks($marks){
    if($marks>90){
        echo 'good';
    }elseif($marks>35 && $marks<70){
        echo 'average';
    }elseif($marks<35){
        echo 'fail';
    }
}
evaluateMarks($marks1);
echo '<pre>';
evaluateMarks($marks2);
echo '<pre>';
evaluateMarks($marks3);
?>