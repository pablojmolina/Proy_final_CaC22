<?php
include "coneccion.php";

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from proyectos where id=$id ");
    if ($sql == 1){
        
        header("location:registro.php");
        echo '<div class="alert alert-success">Proyecto borrado correctamente</div>';
    } else {
        # code...
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}