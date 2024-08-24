<?php 
$var=80;

function add(){
global $var;
$var+=10;
echo $var;
echo '<br>';
}
add();

function sub(){
global $var;
$var-=50;
echo $var;
}
sub();
?>
