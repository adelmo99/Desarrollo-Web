<?php 

class ViewsLoginModells{
    function loginModells($enlaces){
        if (isset($enlaces) && $enlaces == 'consulta-de-saldo' || $enlaces == 'depositos-en-efectivo-a-cuentas' || $enlaces == 'pagos-de-servicios' ||
        $enlaces == 'cambio-de-nip' || $enlaces == 'pagos-de-servicios-en-efectivos' || $enlaces == 'pago-de-impuestos' || $enlaces == 'transferencia-entre-cuentas'|| 
        $enlaces == 'inicio') {
            $ruta = 'login_sections/'.$enlaces.'.php';
        }else{
            $ruta = 'login_sections/error404.php';
        }
        
        return $ruta;
    }
}

?>