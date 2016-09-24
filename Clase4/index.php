<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hojaestilo1.css">
		<title>Ejercicio Clase 2</title>
	</head>
	<body>
		<div class="row" id="color">
			<h1>Ejercicio II</h1>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="img\html5.png" width="250" height="250"  alt="imagen de fondo">
			</div>

			<div class="col-sm-4 div2">
				<h3>La siguiente columna es PHP</h3>
				<p>Emplearemos ciclos para recorrerlos</p>
				<hr>
				<table>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
					</tr>
					<tr>
						<td>Jorge</th>
						<td>Bueso</th>
					</tr>
					<tr>
						<td>Marcos</th>
						<td>Bardales</th>
					</tr>
					<tr>
						<td>Sully</th>
						<td>Mancia</th>
					</tr>
				</table>
			</div>

			<div class="col-sm-4 div2">
				<?php
					$mensaje="Bienvenido a nuestra aplicacion";
					$clase=2;
					$opcion="Kinder";


					echo $mensaje;
					echo "<br>";
					echo "Esta es la clase # $clase";
					echo "<br>";
					echo "Esta es la clase # ".$mensaje;
					echo "<br>";
					echo "Clase ","#"," 2";
					echo "<br>";
					echo "<br>";
					echo strlen("Clases");
					echo "<br>";
					echo str_word_count("Gracias totales Bienvenidos");
					echo "<br>";
					echo strrev("Anita lava la tina");
					echo "<br>";
					echo strpos("Este es el ejemplo sobre str pos", "pos");
					echo "<br>";
					echo str_replace("pos", "replace", "Este es el ejemplo sobre str pos");
					echo "<br>";
					
					switch ($opcion) {
						case "colegio":
						case "Colegio":
							echo "Bienvenido colegial";
							break;
						case "Universidad":
						case "universidad":
							echo "Bienvenido universitario";
							break;
						default:
							echo "Bienvenido";
							break;
					}

				?>
			</div>
		</div>
	<!--
		<h1>Este es el ejercicio II</h1>
		<br>
		<br>
		<p title="Esta es la clase 2"> El parrafo consta de una idea basica  en la primera sentencia el resto es para explicarla</p>
		<img src="img\img1.jpg" width="250" height="250" alt="imagen de fondo">
		<img src="img\html5.png" width="250" height="250"  alt="imagen de fondo"> -->
	</body>
</html>
