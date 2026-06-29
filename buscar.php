<?php

$dni = $_POST['dniBusqueda'];

include('conectar.php');

$resultado = mysqli_query($datosBD,"SELECT * 
                                FROM paciente 
                                WHERE dni=$dni");

$resultadoFinal = mysqli_fetch_row($resultado);

if(!empty($resultadoFinal)){
    header("Location: index.php?encontrado");
}else{
    header("Location: index.php?noencontrado");
}





?>