<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$s1="Hello World! Welcome to PHP string functions.";?>
<h4><?php echo strlen($s1);?></h4>
<h4><?php echo str_replace("World","Universe",$s1);?></h4>
<h4><?php echo strtolower($s1);?></h4>
<h4><?php echo strtoupper($s1);?></h4>
<h4><?php echo ucwords($s1);?></h4>
<h4><?php echo ucfirst($s1);?></h4>
<h4><?php echo trim($s1);?></h4>
</body>
</html>
