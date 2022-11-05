<?php

if (isset($_POST['submit'])){
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $variable = null;
    $acceso = false;
    $iconoError = "<i class='fa-solid fa-circle-xmark'></i>";
    $iconoExito = "<i class='fa-solid fa-circle-check'></i>";
    
    if (strlen($nombre) > 35) {
        $variable = 'Corriija el nombre';
        $acceso = true;
    }
    if ($email == 'nombiopuiore') {
        $variable = 'Corrija el email por favor.';
        $acceso = true;
    }
    if (strlen($mensaje) > 180) {
        $variable = 'La longitud máxima es de 180 carácteres';
        $acceso = true;
    }
    elseif (empty($nombre) || empty($email) || empty($mensaje)) {
        $variable = 'Complete los datos por favor';
        $acceso = true;
    }else{
        $acceso = false;
    }

    if ($acceso) {
        echo "<p class='error_mesajeVerify'>".$iconoError.$variable."</p>";
    }else{
        $variable = 'Los datos se han enviado con éxito.';
        echo "<p class='exito_mesajeVerify'>".$iconoExito.$variable."</p>";
    }
}

?>
