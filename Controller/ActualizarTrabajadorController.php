<?php 
require_once('../Model/TrabajadorModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
}

$trabajador = new TrabajadorModel();
$trabajador->updateTrabajador($id, $nombre, $apellido, $dni, $celular);

header('Location: TrabajadorController.php');
exit;

?>