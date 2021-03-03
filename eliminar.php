<?php
include 'conexiones.php';
$id=$_GET['PersonID'];
$sql="delete from person where PersonID='".$id."'";
mysqli_query($sql);
header('location:index.php');


?>