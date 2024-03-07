<?php 
require_once('../Model/TrabajadorModel.php');

if ($_SERVER['REQUEST_METHOD'] = 'GET') {
    $id = $_GET["id"];
};

$trabajador = new TrabajadorModel;
$trabajador->deleteTrabajador($id);

header('Location: TrabajadorController.php');
exit;
?>