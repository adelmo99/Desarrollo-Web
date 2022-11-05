<?php

class viewsModels{
    function viewsEnlacesPaginasModels($enlace){
        if(isset($enlace) && $enlace == 'inicio' || $enlace == 'blog' || $enlace == 'proyectos' ||  $enlace == 'tecnologias' || $enlace == 'contacto') {
            $ruta = "./views/templates/".$enlace.".php";

        }else if (isset($enlace) && $enlace == 'index' || $enlace == 'ejercicio2' || $enlace == 'ejercicio3' || $enlace == 'ejercicio4' || $enlace == 'ejercicio5' || $enlace == 'ejercicio6' || $enlace == 'ejercicio7' || $enlace == 'ejercicio8' || $enlace == 'ejercicio9' || $enlace == 'ejercicio10') {
            $ruta = "./views/templates/mini_proyectos/".$enlace.".html";

        }else{
            $ruta = "./views/templates/error.php";
        }
        return $ruta;
    }
    function getDataForm($nombre, $email, $mensaje){
        if((isset($nombre) && isset($email) && isset($mensaje)) && ($nombre != '' && $email != '' && $mensaje != '')) {
            $info = "../index.php?name=contacto";
        }else{
            $info = '../index.php?name=error';
        }
        return $info;
    }
}

?>
