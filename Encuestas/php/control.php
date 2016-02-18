<?php 
include  ('conexion.php');

/*$usuarioIng=$_POST['user'];
$passIng=$_POST['pass'];*/

$consulta=mysql_query("SELECT * FROM login");
// El mysql_fecth_array() devuelve los registros de la tabla de usuarios



//verifica los datos pass,email=consulta:sql:crea variable:compara.


$filas=mysql_fetch_array($consulta);

	//$id=$filas['id'];
	//$nombre=$filas['nombre'];
	$usuario=$filas['email'];
	$pass=$filas['pass'];

if ($email=$_POST['email']!=$usuario) {
	$email=$_POST['email'];
 	?>
 	<form name="formulario" method="post" action="../login.php">
 		<input type="hidden" name="email" value="<?php echo $email; ?>">
 	</form>
 	<?php 
}else{
	if($password=$_POST['password']!=$pass){

		?>
		<form name="formulario" method="post" action="../login.php">
 		<input type="hidden" name="password" value="<?php echo $password; ?>">
 	</form>
 	<?php 
}else{
	//inicio de session
	session_start();
	//declaro mis variables de sesion
	$_SESSION["autentificado"] = true;
	$_SESSION["usuario"] = $_POST['email'];
	header("Location: ../crearEncuesta.php");

	}
}

 ?>

 <script type="text/javascript">
 //ayuda a simular un boton
 //redireccionar con el formulario creado
 	document.formulario.submit();
 </script>