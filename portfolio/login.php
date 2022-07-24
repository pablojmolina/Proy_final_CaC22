<!doctype html>
<html lang="es">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/my_form.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/my_script.js"></script>

</head>
<?php
    #inicializamos variables de sesion 
    session_start();
    #validar datos
    if ($_POST){
        if( ($_POST['email']=="admin@gmail.com") && ($_POST['pass']=='codoacodo22') ){
          $_SESSION['usuario']="administrador";
          #redirecciono porque ingreso ok 
          echo '<script>
                    $(document).ready(function(){
                    swal({icon: "success", 
                        position: "top-end", 
                        type: "success", 
                        title: "Bienvenido!", 
                        showConfirmButton: true, 
                        timer: 000})
                    });
                    </script>';
          header("location:registro.php");
          die();
        }
        else{
            //    echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
            echo '<script>
                    $(document).ready(function(){
                    swal({icon: "warning", 
                        position: "top-end", 
                        type: "success", 
                        title: "Usuario o contraseña incorrectos", 
                        showConfirmButton: true, 
                        timer: 000})
                    });
                    </script>';
                    header("location:401.php");
            die();
        }
    }
?>

<body>

    <div class="login-div">
        <div class="logo"></div>
        <div class="title">Login</div>
        <div class="sub-title">Mi Portfolio</div>
        <form action="login.php" method="post">
            <div class="fields">
                <!-- <div class="username"><input type="username" class="user-input" placeholder="username" /></div> -->
                <div class="username"><input type="email" name="email" class="user-input" placeholder="Usuario/Email"
                        id="exampleInputEmail1" /></div>
                <!-- <div class="password"><input type="password" class="pass-input" placeholder="password" /></div> -->
                <div class="username"><input type="password" name="pass" class="pass-input" placeholder="Contraseña"
                        id="exampleInputPassword1" /></div>
            </div>
            <button type="submit" class="signin-button" id="btnUpdateSubmit">Ingresar</button>
        </form>
        <div class="link">
            <a href="#">Olvidaste tu Password?</a> o <a href="#">Crea tu cuenta</a>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/my_script.js"></script>
    <!-- Sweetalert2 JS -->
    <script src="js/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script type="module" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>