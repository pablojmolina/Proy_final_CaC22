<?PHP
    include "coneccion.php";
    if (!empty($_POST["btnregistrar"])){
        /* if (!empty($_POST["nombre"]) and !empty($_POST["archivo"]) and !empty($_POST["descripcion"])){  */
        if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"])){ 
            //Si esta todo correcto
            $nombre=$_POST["nombre"];
            //$imagen=$_POST["imagen"];
            $imagen = $_FILES['archivo']['name'];
            $imagen_temporal=$_FILES['archivo']['tmp_name'];
            move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
            $iimagen = "imagenes/".$imagen;
            $descripcion=$_POST["descripcion"];
            $sql=$conexion->query(" insert into proyectos(nombre, imagen, descripcion)values('$nombre','$iimagen','$descripcion') ");
            if ($sql == "1") {
                echo '<div class="alert alert-success">Proyecto guardado correctamente</div>';
            } 
            else {
                echo '<div class="alert alert-danger">Error al guardar proyecto</div>';
            }
        } 
        else {
            echo '<div class="alert alert-danger">Complete todos los campos!</div>';
        }
    }
?>


