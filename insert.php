<?php
if($_POST){



    $name = $_POST['asignatura'];
    $fecha = $_POST['fecha'];
    $conn = mysqli_connect('localhost', 'root', '', 'examenes');
    $query = "INSERT INTO examen(asignatura,fecha) VALUES ('$name','$fecha')";
    $cons= mysqli_query($conn, $query);
    header("Location: index.html");
}


echo 'noo';




?>