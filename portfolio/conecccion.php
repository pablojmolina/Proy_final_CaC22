<?php
function conexion(){
    $host="localhost";
    $user="molinapa_crud";
    $pass="Crud123456Crud123456";
    $bd="molinapa_crud";
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>

