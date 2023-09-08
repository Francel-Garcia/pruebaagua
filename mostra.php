
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>



        
<?php 

$conexion=pg_connect("host=localhost dbname=empresa user=postgres password=FRmanuelG1223c@");
$query="SELECT   codigo, nombre FROM  clientes  ";
$consulta=pg_query($conexion,$query);

if ($consulta){


if (pg_num_rows($consulta)>0){


	echo "<center> listado de la consulta de las personas.<br>";

	while ($obj=pg_fetch_object($consulta)) {
		// code...
              
	              
		echo $obj -> nombre."-->";

		  
		 echo $obj -> codigo."<br>" ;
	   

	}



}


}


 ?>




</body>
</html>



