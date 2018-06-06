<!doctype html>
<html>
	<head>
		<title>borrado de rubro</title>
		<meta charset="utf-8">
	</head>  
<body>
  
	<?php
		$mysql=new mysqli("localhost","root","","bdpruebas");
		if ($mysql->connect_error)
			die("Problemas con la conexión a la base de datos");	  
		$mysql->set_charset("utf8");
		$registro=$mysql->query("delete from rubros where codigo=$_POST[codigo]") or
			die($mysql->error);
	 
		if ($mysql->affected_rows==1)
			echo 'Se elimino el articulo';	  
		else
			echo 'No existe un articulo con dicho código';
	 
		/*if ($reg=$registro->fetch_array()){
			$mysql->query("delete from rubros where codigo=$_POST[codigo]") or
				die($mysql->error);    
			echo 'La descripción del rubro que se eliminó es:'.$reg['descripcion'];	  
		}else{
			echo 'No existe un rubro con dicho código';
		}*/
	
		$mysql->close();
	?>  
</body>
</html>