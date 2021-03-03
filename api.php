<?php
include 'conexiones.php';
$result = mysqli_query($con,"SELECT * FROM Persons");

$datos = [];
if($result !== false) {
while($row = mysqli_fetch_object($result)){
$datos[] = $row;
}
}

echo json_encode($datos, JSON_PRETTY_PRINT);
?>