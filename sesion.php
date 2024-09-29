<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'petshop';

    $conexion = new mysqli($host, $user, $pw, $db);

    // Verifica si hay un error en la conexión
    if ($conexion->connect_error) {
        die("Error: " . $conexion->connect_error);
    }

    // Prepara la consulta para evitar inyección SQL
    $stmt = $conexion->prepare("SELECT contraseña FROM clientes WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    // Verifica si se encontró un registro
    if ($stmt->num_rows == 1) {
        // Vincula el resultado
        $stmt->bind_result($hash);
        $stmt->fetch();

        // Verifica la contraseña
        if (password_verify($password, $hash)) {
            // Éxito: redirigir a productos
            header("Location: productos.html");
            exit();
        } else {
            // Falla: contraseña incorrecta
            header("Location: index.html");
            exit();
        }
    } else {
        // Falla: usuario no encontrado
        header("Location: index.html");
        exit();
    }

    // Cierra la conexión
    $stmt->close();
    $conexion->close();
}
?>
