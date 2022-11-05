<?php
class ViewsControllers{
    function getViewOneController(){
        include "views/index.php";
    }
    function getEnlacesPaginasController(){
        if(isset($_GET['name'])) {
            $section = $_GET['name'];
        }else{
            $section = 'inicio';
        }

        $modelTemplate = new viewsModels();
        $enlace = $modelTemplate->viewsEnlacesPaginasModels($section);
        
        include $enlace;


    }
}

?>
