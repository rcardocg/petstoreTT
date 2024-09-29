<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
	<script src='script.js'></script>
	<link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicie sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<form action = "sesion.php" method="POST">
		<div class="grid-container">
			<div class="item1">
				<h1>Inicio de sesión</h1>
			</div>
			<div class="item2">
				<input type="text" name="email" placeholder="Correo electrónico">
				<br>
				<input type="password" name="password" placeholder="Contraseña">
				<br>
				<button type="submit" class="btn btn-primary">Ingresar</button>
				<br>
				<a href=crearCuenta.php>¿No tiene una cuenta?</a>
			</div>
			<div class="item3">
				<strong>Ricardo Caballeros</strong>
				<br>
				<strong>Kimberly Hernandez</strong>
				<br>
				<strong>Yoselin Mejía</strong>
			</div>
		</div>
	</form>
</body>
</html>
