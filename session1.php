<?php
session_start();
echo 'Bank details'.'<br>'.'<br>';
echo 'Your name is:    '.$_SESSION['Name'].'<br>';
echo 'Your Phone number is:    '.$_SESSION['Phone_Number'].'<br>';
echo 'Your Bank number is:    '.$_SESSION['Bank_Number'].'<br>';
echo 'Your IFSC code is :    '.$_SESSION['IFSC'].'<br>';
echo 'Your Bank Branch name is:    '.$_SESSION['Branch'];
session_destroy();

?>