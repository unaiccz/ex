<?php

// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'examenes');

// Si hay algún error de conexión, mostramos un mensaje y terminamos la ejecución del script
if (mysqli_connect_error()) {
    die('Error de conexión a la base de datos: ' . mysqli_connect_error());
}

// Obtenemos el valor de la variable 'id' de la cadena de consulta de la URL
$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

// Preparamos la consulta SQL utilizando una consulta preparada y parámetros para evitar la inyección de SQL
$stmt = mysqli_prepare($conn, "DELETE FROM examen WHERE id = ?");
mysqli_stmt_bind_param($stmt, "s", $id);

// Ejecutamos la consulta
if (!mysqli_stmt_execute($stmt)) {
    die('Error al ejecutar la consulta: ' . mysqli_error($conn));
}

// Cerramos la conexión a la base de datos
mysqli_close($conn);
