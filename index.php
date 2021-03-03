<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
<?php
include 'conexiones.php';
$sql = "select * from Persons";
$resultado = mysqli_query($con,$sql);
?>;
<div>
    <a href="agregar.php">Nuevo</a>
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>LastName</td>
            <td>FirstName</td>
            <td>Address</td>
            <td>City</td>
        </tr>
        </thead>
        <tbody>
        <?php while ($filas = mysqli_fetch_assoc($resultado)) {

            ?>
            <tr>
                <td> <?php echo $filas['id'] ?></td>
                <td><?php echo $filas['LastName'] ?></td>
                <td><?php echo $filas['FirstName'] ?></td>
                <td><?php echo $filas['Address'] ?></td>
                <td><?php echo $filas['City'] ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $filas['id'] ?> ">editar</a>
                    <a href="eliminar.php?id=<?php echo $filas['id'] ?>">eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>