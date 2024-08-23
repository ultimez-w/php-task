<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $index[]=[225,'Dreams','Glass',30,25,1,'Globe'];
    $asso[]=['0'=>'Couch','ice'=>'india','6'=>'Box','Trip'=>'Range'];
?>

<h4><?php  print_r($index);?></h4>
<h4><?php  print_r($asso);?></h4>
<h4><?php $arr3=array_merge($index,$asso);
 print_r($arr3);?></h4>
 <h4><?php echo $index[2];?></h4>
 <h4><?php echo $asso(1);?></h4>
</body>
</html>