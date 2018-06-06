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
    $mysql->query("update rubros set descripcion='$_POST[descripcion]' 
                          where codigo=$_POST[codigo]") or
      die($mysql->error);
     
    echo 'Se modificó la descripción del rubro';
    
    $mysql->close();

  ?>  
</body>
</html>