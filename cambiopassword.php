<html>
<body>
	<?php

	include_once "conexion.php";

	if (isset($_POST))
	{	
		
		$usuario     = $_POST['usuario'];
		$passwd_old  = $_POST['password_old'];
		$passwd_new  = $_POST['password_new'];
		$query = mysqli_prepare($conexion, $SQL_ACTUALIZAR_PASSWORD);
		$ok = mysqli_stmt_bind_param($query, 'dsd', $passwd_new , $usuario ,$passwd_old);
		$ok = mysqli_stmt_execute($query);

		if(mysqli_stmt_affected_rows($query)>0){
			echo "Éxito al actualizar la contraseña del usuario $usuario en la base de datos";
		}else{
			echo "El conjunto usuario y contraseña antigua no es válido";
		}
		mysqli_stmt_close($query);
		
	}
	desconectar($conexion);

	?>

</body>
</html>