<!DOCTYPE html>
<html lang = "eng">
<head>
	<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1.0">
	<title>Productos</title>
	<link rel="stylesheet" href = "styles.css">
</head>
<body>
	<div class="grid-container">
		<div class = "item1">
			<h1>Ingrese sesión:</h1>
		</div>
		<div class = "item2">
			<?php
				$db_connection = pg_connect("host = localhost port =5432 dbname=petshop password=root") or die('Hubo un error: ' . pg_last_error())
			?>
		</div>
		<div class = "item3">
			<strong>Ricardo Caballeros</strong>
			<br>
			<strong>Kimberly Hernandez</strong>
			<br>
			<strong>Yoselin Mejía</strong>
						
		</div>
</body>
</html>

