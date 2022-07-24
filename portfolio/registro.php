<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de proyectos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fb4929a40d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body">

    
    <div class="col-12 bg-dark">
        <h1 class="text-primary text-center">CRUD Portfolio</h1>
    </div>

    <div class="container-fluid row registro-body">
        <div class="col-4 border border-info m-10 p-10">
            <!-- <form class="p-3" method="post" action="#"> -->
            <form class="p-3" action="#" method="post" enctype="multipart/form-data">
                <div class="border border-info m-2 p-2">
                    <h3>Registro de nuevos proyectos</h3>
                </div>
                <?PHP
                include "coneccion.php";
                include "borrar.php";
                include "guardar.php";
                ?>
                <div class="mb-3 p-1">
                    <div class="mt-2">
                        <label for="" class="form-label">Nombre de Proyecto</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mt-2">
                        <label for="" class="text-left">Imagen</label>
                        <input required class="form-control" type="file" name="archivo" id="archivo">
                        <!--<input type="text" class="form-control" name="imagen">-->
                    </div>
                    <div class="mt-2">
                        <label for="" class="text-left">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion">
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Guardar</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-8 border border-info m-10 p-10">
            <table class="table table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col"></th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "coneccion.php";
                    $sql=$conexion->query(" select * from proyectos ");
                    while($datos=$sql->fetch_object()){ 
                        $id=$datos->id ;
                        $nom=$datos->nombre ;
                        $img=$datos->imagen ;
                        $des=$datos->descripcion ;

                ?>
                    <tr>
                        <td><?= $id?></td>
                        <td><?= $nom?></td>
                        <td> <img width="100" src="<?= $img?>" alt=""></td>
                        <td><?= $des?></td>
                        <td>
                            <a href="actualizar.php?id=<?= $id?>" class="btn btn-warning btn-social mx-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar_function()" href="borrar.php?id=<?= $id?>"
                                class="btn btn-danger btn-social mx-2"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php }    
                ?>

                </tbody>
            </table>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    </body>

</html>