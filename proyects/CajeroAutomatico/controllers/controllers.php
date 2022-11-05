<?php
class ViewsController{
    function getViewController(){
        include 'views/index.php';
    }
    function paginasTemplatesController(){
        require_once 'models/conexion.php';

        // Maneja los enlaces principales ( inicio | ayuda | iniciar sesion )
        if (isset($_GET['name'])) {
            $enlace = $_GET['name'];
            
        }else{
            $enlace = 'index';
        }
        $modelEnlaces = new TemplatesModells();
        $valor = $modelEnlaces->enlacesPaginasModells($enlace);
        
        // Maneja los enlaces del apartado HELP ( proposito | ... | ... )
        if (isset($_GET['help'])) {
            $enlace2 = $_GET['help'];
        }else{
            $enlace2 = 'index';
        }
        $help = new TemplatesModells();
        $valorHelp = $help->enlacesPaginasAyudaModells($enlace2);

        if ($valorHelp != 'views/templates/initiation.php') {
            include $valorHelp;
        }else{
            include $valor;
        } 
    }

}  
?>
