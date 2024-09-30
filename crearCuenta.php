<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
    
</head>
<body> 
    <form action="createUser.php" method="POST">
        <div class="grid-container">
            <div class="item1">
                <h1>
                Crear cuenta
            </h1>
            </div>
        <!--Aqui van las categorías de tipos de mascotas-->
            <div class="item2">
            <input type="text" name="nombre" placeholder="Ingrese su nombre">
            <br>
            <input type="text" name="email" placeholder="Correo electrónico">
                <br>
                <input type="password" name="password" placeholder="Contraseña">
                <br>
                <input type="text" name="telefono" placeholder="Número de teléfono">
                <br>
                <input type="text" name="direccion" placeholder="Dirección">
                <br>
                <label>Tipo de cuenta</label>
                <br>
                <!--Admin son tipo 1, usuarios son tipo 2-->
                <input type="radio" name="typeRadio" id="adminRadio">Administrador</input>
                <input type="radio" name="typeRadio" id="userRadio">Usuario</input>
                <br>
                
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
            <!--Nuestros nombres-->
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