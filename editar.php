<?php
include 'conexiones.php';
$id=$_GET['id'];
$sql="select * from Persons where id='" .$id."'";
$resultado=mysqli_query($con,$sql);
   while ($fila= mysqli_fetch_assoc($resultado) ){

?>
<div>
    <form>
        <input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
        <label>Primer Nombre</label><br>
        <input type="text" name="txtlastname" value="<?php echo $fila['LastName'] ?>"><br>
        <label>segundo Nombre</label><br>
        <input type="text" name="txtfirstname" value="<?php echo $fila['FirstName'] ?>"><br>
        <input type="submit" name="" value="actualizar">
        <a href="index.php">regresar</a>

    </form>
    <?php } ?>
</div>
<?php
$id2=$_GET['txtid'];
$lastname=$_GET['txtlastname'];
$firstname=$_GET['txtfirstname'];
if ($lastname !=null || $firstname !=null){
    $sql2 ="update Persons set LastName='".$lastname."',FirstName='".$firstname."' where id='".$id2."'";
    mysqli_query($con,$sql2);
    if ($lastname=1){
        header("location:index.php");
    }

}


?>