<?php

$id = $GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'examenes');
$query = "DELETE FROM examen where id = '$id'";
$cons = $constt =mysqli_query($conn, $query);
echo $id;



?>