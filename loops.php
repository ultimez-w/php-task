<?php 
$arr1=[
    ['name'=>'apporva','marks'=>90],
    ['name'=>'anku','marks'=>95]
];

$arr1[]=[['name'=>'preetu','marks'=>75],['name'=>'vishnu','marks'=>89],['name'=>'jyoti','marks'=>99]];
echo '<pre>';
print_r($arr1);

foreach($arr1 as $arr1_value){
    echo $arr1_value['marks'];
}

$arr1=0;
while($arr1<5){
    echo "while loop is executing";
    $arr1++;
}

$arr1=0;
do{
    echo "Do-while loop is executing";
    $arr1++;
}while($arr1<5)
?>
