<html>
<body>
	<?php

	include_once "conexion.php";

	if (isset($_POST))
	{	
		
		$usuario =  $_POST['usuario'];
		$passwd  =  $_POST['password'];
		
		$query = mysqli_prepare($conexion, $SQL_INSERTAR_USUARIO);
		
		$ok = mysqli_stmt_bind_param($query, 'sd', $usuario , $passwd);
		$ok = mysqli_stmt_execute($query);

		if(mysqli_stmt_affected_rows($query)>0){
			echo "Éxito al insertar el usuario $usuario en la base de datos";
		}else{
			echo "Algun error ocurrió al insertar usuario en la base de datos";
		}
		mysqli_stmt_close($query);
		
	}
	desconectar($conexion);

	?>

</body>
</html>