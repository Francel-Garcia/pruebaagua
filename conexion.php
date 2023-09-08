<?php 

$conexion=pg_connect("host=localhost dbname=empresa user=postgres password=FRmanuelG1223c@");

$query=(" INSERT INTO clientes(codigo,nombre) VALUES('$_REQUEST[cod]','$_REQUEST[nombre]')");

$consulta=pg_query($conexion,$query);
 
 if ($consulta){

     echo "datos ingresados con exito";

 }
pg_close();

?>
       