<?php

    include '../conexionConBD.php';

    $id = $_POST["id"];

    $sql = "UPDATE productosenVenta SET carrito='1' ". "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){

        echo '<script>';
            echo 'window.location.href="index.php";';
            echo 'window.alert("Producto añadido");';
        echo '</script>';
    } 

 

?>