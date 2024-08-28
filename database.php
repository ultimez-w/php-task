<?php
$server='localhost';
$username='root';
$password='';
$database='task';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
    //echo 'connected';

}else{
   // echo 'not connected'.mysqli_connect_error();
}

$insert="INSERT INTO `country`(`id`, `country_name`, `country_capital`, `famous_name`) VALUES ('','[India]','[Delhi]','[Red fort]')";
$insert1="INSERT INTO `country`(`id`, `country_name`, `country_capital`, `famous_name`) VALUES ('','[France]','[Paris]','[Eiffel Tower]')";
$insert2="INSERT INTO `country`(`id`, `country_name`, `country_capital`, `famous_name`) VALUES ('','[Japan]','[Tokyo]','[Mount Fuji]')";
$insert3="INSERT INTO `country`(`id`, `country_name`, `country_capital`, `famous_name`) VALUES ('','[Brazil]','[Brasilia]','[Christ the redeemer]')";
$insert4="INSERT INTO `country`(`id`, `country_name`, `country_capital`, `famous_name`) VALUES ('','[Egypt]','[Cario]','[The great pyramid of giza]')";
// $result=mysqli_query($conn,$insert4);
// if($result){
//     echo 'inserted';
// }else{
//     echo'not inserted'.mysqli_connect_error();
// }

$fetch="SELECT * FROM `country`";
$result=mysqli_query($conn,$fetch);
//print_r($result);
$user=mysqli_fetch_all($result,MYSQLI_ASSOC);echo'<pre>';
//print_r($user);

foreach($user as $user_value){
    print_r($user_value);
}

?>