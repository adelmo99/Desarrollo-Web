<?php
include "..\models\conexionModel.php";

if (isset($_POST['submit'])){
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if ((isset($nombre) && isset($email) && isset($mensaje)) && ($nombre != '' && $email != '' && $mensaje != '')) {
        $controllerInfo = new viewsModels();
        $getData = $controllerInfo->getDataForm($nombre, $email, $mensaje);
        header('Location: '.$getData);
    } else {
        // include('..\views\templates\contacto.php');
        header('Location: ../index.php?name=contacto');
    }
}


?>
