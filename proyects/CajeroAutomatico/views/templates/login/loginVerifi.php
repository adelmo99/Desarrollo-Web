<?php 
include_once "login_headerFooter/header.php";
require_once "../../../controllers/login.php";

$loginVerifi = new LoginPlantillasControllers();
$loginVerifi->enlacesLoginControllers();

include "login_headerFooter/footer.php";
?>