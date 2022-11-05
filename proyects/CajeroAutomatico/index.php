<?php
require_once 'controllers/controllers.php';
require_once 'models/conexion.php';


$view = new ViewsController();
$view->getViewController();

?>