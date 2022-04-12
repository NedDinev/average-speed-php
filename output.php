<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Средна скорост</title>
  </head>
  <body>
      <h2>Средна скорост</h2>
<?php 
$put=$_POST["put"];
$trugvaneChas=$_POST["trugvaneChas"];
$trugvaneMin=$_POST["trugvaneMin"];
$pristiganeChas=$_POST["pristiganeChas"];
$pristiganeMin=$_POST["pristiganeMin"];

?>
<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="50%"> 
    <caption><big><b>Време на пристигане</b></big></caption>
<tr><th>Път: </th><?php echo $trugvaneChas; ?> </tr> 
</table>
</body>
</html>
