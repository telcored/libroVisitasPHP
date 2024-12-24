<?php
session_start();
require_once 'Visitas.php';

$visitas = new Visitas();

$validacion = 0;

foreach ($_POST as $key => $value) {
    if (empty($value)) {

        $_SESSION['mensaje'] = 'Debes llenar todos los campos!';
        $validacion++;
       
    }
}


if ($validacion == 0) {


    $datos = array(
        "apellidos" => $_POST['apellidos'],
        "departamento" => $_POST['departamento'],
        "nombre" => $_POST['nombre'],
        "motivo" => $_POST['motivo'],
        "fecha" => date('Y-m-d H:i:s'),
        "tarjeta" => $_POST['tarjeta'],
       

    );

    if ( $visitas->agregarVisita($datos)){

        $_SESSION['mensaje'] = "Agregado con el peazo de exito !!";
        header("location:../index.php");

    }else{

        $_SESSION['mensaje'] = "Error Error Error !";
        header("location:../index.php");
    }

}else{

    header("location:../index.php");
}


?>