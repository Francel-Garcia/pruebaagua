<?php 

$conexion=pg_connect("host=localhost dbname=empresa user=postgres password=FRmanuelG1223c@");

$query="SELECT codigo, nombre FROM clientes ";

$consulta=pg_query($conexion,$query);
 


?>
       