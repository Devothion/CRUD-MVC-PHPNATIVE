<?php 
require_once('../Model/TrabajadorModel.php');

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET["id"];
}

$trabajador = new TrabajadorModel;
$datos = $trabajador->getTrabajador($id);

require_once('../View/EditarTrabajadorView.phtml');

?>