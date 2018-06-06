<!doctype html>
<html>
	<head>
		<title>Listado</title>
		<meta charset="utf-8">
		<style>
			.tablalistado {
				border-collapse: collapse;
				box-shadow: 0px 0px 8px #000;
				margin:20px;
			}
			.tablalistado th{  
				border: 1px solid #000;
				padding: 5px;
				background-color:#ffd040;	  
			}
			  
			.tablalistado td{  
				border: 1px solid #000;
				padding: 5px;
				background-color:#ffdd73;	  
			}
		</style>
	</head>  
	<body>
	  
		<?php
			$mysql=new mysqli("localhost","root","","bdpruebas");
			if ($mysql->connect_error)
				die("Problemas con la conexión a la base de datos");
			
			if (!$mysql->set_charset("utf8")) {
				//printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysql->error);
				exit();
			} else {
				//printf("Conjunto de caracteres actual: %s\n", $mysql->character_set_name());
			}	
			$sentencia = "select codigo,descripcion from rubros";
			$registros=$mysql->query($sentencia) or
				die($mysql->error);
	  
			while ($reg=$registros->fetch_array()){
				echo $reg['codigo']."<br>";
				echo $reg['descripcion']."<br>";	    
			}	
			// si es una consulta en la que va a venir un valor o ninguno, podemos usar un if en vez del while para recorrer los datos.
			$sentencia = "select * from rubros where codigo = 2";
			$registros=$mysql->query($sentencia) or
				die($mysql->error);
			 if ($reg=$registros->fetch_array()){
				echo 'La descripción del rubro es:'.$reg['descripcion'];	  
			 }else{
				echo 'No existe un rubro con dicho código';
			 }
			$mysql->close();

		?>  
	</body>
</html>