<?php 
include('display_details.php');
echo'<pre>';
print_r($arr1);

require('display_details.php');
echo '<pre>';
print_r($arr1);

include_once('display_details.php');
include_once('display_details.php');
echo'<pre>';
print_r($arr1);

require_once('display_details.php');
require_once('display_details.php');
echo'<pre>';
print_r($arr1);

?>