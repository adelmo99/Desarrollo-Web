<?php 
class LoginPlantillasControllers{
    function enlacesLoginControllers(){
        require_once 'D:\Xampp\htdocs\CajeroAutomatico\models\loginModels.php';

        if(isset($_GET['loginVar'])){
            $enlace = $_GET['loginVar'];
        }
        $modelEnlaces = new ViewsLoginModells();
        $view = $modelEnlaces->loginModells($enlace);
        
        include $view;
    }
}
?>
