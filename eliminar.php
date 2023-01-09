<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'examenes');
$query = "DELETE FROM examen where id = '$id'";
 $constt=mysqli_query($conn, $query);



?>