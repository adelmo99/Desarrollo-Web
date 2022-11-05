<?php
class TemplatesModells{
    function enlacesPaginasModells($enlaces){
        if (isset($enlaces) && $enlaces == 'initiation' || $enlaces == 'help' || $enlaces == 'log_in') {
            $ruta = 'views/templates/'.$enlaces.'.php';
        }else{
            $ruta = 'views/templates/initiation.php';
        }
        return $ruta;
    }
    function enlacesPaginasAyudaModells($enlaces){
        if (isset($enlaces) && $enlaces == 'purpose' || $enlaces == 'steps' || $enlaces == 'logIn' || $enlaces == 'nip') {
            $ruta = 'views/templates/help/'.$enlaces.'.php';
        }else{
            $ruta = 'views/templates/initiation.php';
        }
        return $ruta;
    }
    function enlacesPaginasLog_inModells($numTarjeta, $documento, $clave){
        $baseDeDatos = ['2423 4234 2343 4234', '12345678', '123456'];

        if((isset($numTarjeta) && isset($documento) && isset($clave)) && 
        ($baseDeDatos[0] == $numTarjeta && $baseDeDatos[1] == $documento && $baseDeDatos[2] == $clave)){
            $ruta = '../views/templates/login/login.php';
        }else{
            $ruta = '../index.php?name=log_in';
        }
        return $ruta;
    }

}

?>
