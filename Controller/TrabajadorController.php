<?php 
require_once('../Model/TrabajadorModel.php');
$trabajadores = new TrabajadorModel();
$datos = $trabajadores->getTrabajadores();

require_once('../View/TrabajadorView.phtml');

?>