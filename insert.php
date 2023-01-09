<?php

// Verificamos si se han enviado datos por el formulario
if (isset($_POST['asignatura']) && isset($_POST['fecha'])) {
    // Asignamos los valores recibidos a variables
    $name = $_POST['asignatura'];
    $fecha = $_POST['fecha'];

    // Establecemos conexión a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'examenes');

    // Utilizamos declaraciones preparadas y parámetros para evitar problemas de seguridad
    $stmt = mysqli_prepare($conn, "INSERT INTO examen(asignatura,fecha) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $name, $fecha);
    if (mysqli_stmt_execute($stmt)) {
        // Si la consulta tuvo éxito, redirigimos a la página de inicio
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        // Si la consulta falló, mostramos un mensaje de error
        echo "Error: " . mysqli_error($conn);
    }

    // Cerramos la conexión a la base de datos
    mysqli_close($conn);
}

?>
