<!doctype html>
<html>
	<head>
		<title>Alta</title>
	</head>  
	<body>
		<?php
			// creamos un objeto de msqli, para crearlo nos pide los mismos parametros que que haciendolo como en los ejemplos de antes
			$mysql=new mysqli("localhost","root","","bdpruebas"); 
			// para poner el utf a los datos que recogemos y enviamos al servidor se puede hacer de estas dos maneras.
			//$mysql->set_charset("utf8");
			if (!$mysql->set_charset("utf8")) {
				//printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysql->error);
				exit();
			} else {
				//printf("Conjunto de caracteres actual: %s\n", $mysql->character_set_name());
			}	
			// compruebo si se ha hecho conexion 
			if ($mysql->connect_error)
			  die('Problemas con la conexion a la base de datos');
		  
			
			//ejecuto un string que sera la sentencia sql
			$mysql->query("insert into rubros(descripcion) values ('$_POST[descripcion]')") or
			  die($mysql->error);
			 
			$mysql->close();
			
			echo 'El nuevo rubro se almacenó';	
		?>  
		<br>
	</body>
</html>