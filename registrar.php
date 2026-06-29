<?php
include('conectar.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['mail'];
$diagnostico = $_POST['diagnostico'];

mysqli_query($datosBD,
        "INSERT INTO paciente VALUES ('$apellido','$nombre',
        '$dni','$telefono','$correo','$diagnostico')");

header("Location: index.php?ok");





?>