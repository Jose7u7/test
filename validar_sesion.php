<?php

$server="138.226.86.80";
$connection= array("Database"=>"desarrollo","UID"=>"sa","PWD"=>"Sa1975","characterSet"=>"UTF-8");
$con= sqlsrv_connect($server,$connection);

if($con){
	echo "conexion exitosa";
	
}else{
echo "fallo la conexion";
die(print_r(sqlsrv_errors(), true));
}


?>
