<?php 
    include("conecccion.php");
    
    $con=conexion();
    $id=$_GET['id'];
    $sql="SELECT * FROM proyectos WHERE id='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="div0">
        <div class="div1">
            <form action="update.php" method="POST">
                <!-- <label for="" class="text-left">Id</label> -->
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                <label for="" class="text-left">Id</label>
                <input type="text" class="form-control mb-3" name="id" placeholder="ID" readonly value="<?php echo $row['id']  ?>">

                <label for="" class="text-left">Nombre de Proyecto</label>
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Proyecto"
                    value="<?php echo $row['nombre']  ?>">

                <label for="" class="text-left">Imagen</label>

                <input required class="form-control mb-3" type="file" name="imagen" id="imagen">

                <!-- <input type="text" class="form-control mb-3" name="imagen" placeholder="Imagen"
                    value="<?php echo $row['imagen']  ?>"> -->


                <label for="" class="text-left">Descripcion</label>
                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion"
                    value="<?php echo $row['descripcion']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                <a href="registro.php" class="btn btn-danger btn-block"><i
                        class="fa-solid fa-pen-to-square"></i>Cancelar</a>
            </form>
        </div>
        <div class="div3">
            <img src="<?php echo $row['imagen']  ?>" alt="">
        </div>
    </div>
</body>

</html>