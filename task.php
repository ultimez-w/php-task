<?php 
$product=array(array('product_name'=>'Apoorva','product_price'=>74),array('product_name'=>'Ankita','product_price'=>30),array(
    'product_name'=>'preetam','product_price'=>83),array('product_name'=>'Vishnu','product_price'=>74),array('product_name'=>'Jyoti','product_price'=>93
));
echo'<pre>';
print_r($product);

$sum=0;
foreach($product as $arr){
    $sum=$sum+$arr['product_price'];
}
echo'<br>';
echo "The total product price is :$sum";

?>