<?php
$details=[
    ['apoo','hubli','23','female'],
    ['anku','bangalore','22','female'],
    ['preetu','belagavi','14','male']
];
echo '<pre>';
print_r($details);

$delete=array_shift($details);

print_r($details[0][1]);
echo '<pre>';
print_r($details[1][1]);

$last=array_pop($details);
echo '<pre>';
print_r($last);

$product_details=[
    ['product_name'=>'dress','price'=>2000,'date'=>22-07-2024,'place'=>'hubli'],
    ['product_name'=>'shoes','price'=>3000,'date'=>22-12-2023,'place'=>'bangalore'],
    ['product_name'=>'tv','price'=>1000,'date'=>4-10-2022,'place'=>'belagavi']
];

echo '<pre>';
print_r($product_details);
////$product_details=['product_name'=>'tv','price'=>2000,'date'=>06-01-2024,'place'=>'hubli'];
//echo '<pre>';
//print_r($product_details);

$delete1=array_shift($product_details);

$last1=array_pop($product_details);
print_r($last1);





?>