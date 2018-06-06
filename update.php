<!doctype html>
<html>
	<head>
		<title>Modificación de rubro.</title>
		<meta charset="utf-8">
	</head>  
	<body>
  
	<?php
		$mysql=new mysqli("localhost","root","","bdpruebas");
		if ($mysql->connect_error)
			die("Problemas con la conexión a la base de datos");
		$mysql->set_charset("utf8");
		$registro=$mysql->query("select descripcion from rubros where codigo=$_POST[codigo]") or
			die($mysql->error);
     
		if ($reg=$registro->fetch_array()){
	?>
	<form method="post" action="updatedos.php">
		Descripción del rubro:
		<input type="text" name="descripcion" size="50" 
		value="<?php echo $reg['descripcion']; ?>">
		<input type="hidden" name="codigo"
		value="<?php echo $_POST['codigo']; ?>">     
		<br> 
		<input type="submit" value="Confirmar">
	</form>
	<?php
		}else
			echo 'No existe un rubro con dicho código';

		$mysql->close();

	?>  
	</body>
</html>