<?php
include("conecccion.php");
$con=conexion();

$id=$_POST['id'];
$nom=$_POST['nombre'];
$img=$_POST['imagen'];
$img="imagenes/".$img;
$des=$_POST['descripcion'];

$sql="UPDATE proyectos SET  id='$id',nombre='$nom',imagen='$img' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>