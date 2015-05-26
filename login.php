<html>
<body>
	<?php

	include_once "conexion.php";

	if (isset($_POST))
	{	

		$usuario =  $_POST['usuario'];
		$passwd  =  $_POST['password'];

		$query = mysqli_prepare($conexion, $SQL_COMPROBAR_USUARIO);

		$ok = mysqli_stmt_bind_param($query, 'sd', $usuario , $passwd);
		$ok = mysqli_stmt_execute($query);
		$ok = mysqli_stmt_bind_result($query,$count);

		while(mysqli_stmt_fetch($query)){
			if($count > 0){
				echo "Conexion Satisfactoria Usuario $usuario";
			}
			else{
				echo "Usuario o contraseña no válidos...";
			}	
		}

		mysqli_stmt_close($query);


	}

	desconectar($conexion);
	?>

</body>
</html>
