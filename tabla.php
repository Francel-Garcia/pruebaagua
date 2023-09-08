<?php

require 'conexiontable.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>


     <form action="conexion.php" method="post" style="border: 0px solid#000; width: 35% ; margin: 0 auto; ">
     
        

<ceter><table border="2" bgcolor="red" > 
	<table class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		
  <th>codigo</th>
  <th>nombre</th>

	</tr>
</thead>

<tbody>
	
<?php

while ($obj=pg_fetch_object($consulta)) { ?>

<tr>
 
 <td><?php echo $obj->codigo;?></td>
  <td><?php echo $obj->nombre;?></td>


</tr>
</tbody>

<?php


}
?>




</table></ceter>


</body>
</html>