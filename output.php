<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Средна скорост</title>
  </head>
  <body>
      <h2>Изчисляване на средна скорост</h2>
<?php 
$put=$_POST["put"];
$trugvaneChas=$_POST["trugvaneChas"];
$trugvaneMin=$_POST["trugvaneMin"];
$pristiganeChas=$_POST["pristiganeChas"];
$pristiganeMin=$_POST["pristiganeMin"];
$skorost = 0;


if ($trugvaneMin<$pristiganeMin) {
  $skorost = $put / (($pristiganeChas - $trugvaneChas) + (($pristiganeMin - $trugvaneMin)/60));
}else{
  $skorost =  $put / (($pristiganeChas - ($trugvaneChas-1)) + (($pristiganeMin + 60 - $trugvaneMin)/60))
}
?>
<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="50%"> 
    <caption><big><b>Време на пристигане</b></big></caption>
<tr><th>Път за изминаване:</th><th><?php echo $put; ?> </th></tr> 
<tr><th>Време на тръгване в часове:</th><th><?php echo $trugvaneChas; ?> </th></tr> 
<tr><th>Време на тръгване в минути:</th><th><?php echo $trugvaneMin; ?> </th></tr> 
<tr><th>Време на пристигане в часове: </th><th><?php echo $pristiganeChas; ?> </th></tr> 
<tr><th>Време на пристигане в минути:</th><th><?php echo $pristiganeMin; ?> </th></tr> 
<tr><th>Средна скорост км/ч:</th><th><?php  echo $skorost  ?> </th></tr> 
</table>
</body>
</html>
