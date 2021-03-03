<?php
include 'conexiones.php';
$id=$_GET['id'];
$sql="delete from Persons where id='".$id."'";
mysqli_query($con,$sql);
header('location:index.php');


?>