<?php 

 // Manejo de cuando se hace un login --------
 $numTarjeta = $_POST['numeroTarjeta'];
 $documento = $_POST['documento'];
 $clave = $_POST['clave'];
 

 if(isset($_POST['numeroTarjeta']) && isset($_POST['documento']) && isset($_POST['clave'])){
    require_once '../models/conexion.php';

    $ruta = new TemplatesModells();
    $log_in = $ruta->enlacesPaginasLog_inModells($numTarjeta, $documento, $clave);
    header('Location: '.$log_in);
}else{
    header('Location: ../index.php?name=log_in');
}
?>

