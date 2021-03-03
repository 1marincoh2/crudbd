<div>
    <form>
        <label>Primer Nombre</label><br>
        <input type="text" name="txtlastname"><br>
        <label>segundo Nombre</label><br>
        <input type="text" name="txtfirstname"><br>
        <input type="submit" name="" value="agregar">
        <a href="index.php">regresar</a>

    </form>
</div>
<?php
    include 'conexiones.php';
    $lastname=$_GET['txtlastname'];
    $firstname=$_GET['txtfirstname'];
    if ($lastname !=null || $firstname !=null){
        $sql="insert into person(LastName,FirstName)values('".$lastname."','".$firstname."')";
        mysqli_query($sql);
        if ($lastname=1){
            header("location:index.php");
       }

   }
?>