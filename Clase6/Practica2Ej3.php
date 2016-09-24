<!--
Denis Roberto Bautista
03/09/2016
Edusystem
 -->
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Clase 6 Practica 2 Ejercicio 3</title>
</head>
<body>
<!--Formulario-->
	<form name="Contrato" action="Practica2Ex3.php" method="POST">
		<br>
		<h1>Datos de las empresa</h1>
		Ciudad actual: <input type="text" name="CEmpresa">
		<br>
		Nombre: <input type="text" name="NEmpresa">
		<br>
		Representante: <input type="text" name="REmpresa">
		<br>
		Direccion: <input type="text" name="DEmpresa">
		<br>
		<h1>Datos del futuro empleado</h1>
		<br>
		Nombre completo: <input type="text" name="NEmpleado">
		<br>
		Direccion: <input type="text" name="DEmpleado">
		<br>
		<br>
		<input type="submit" value="Generar" name="enviar" class="btn btn-info">
	</form>
</body>
</html>
