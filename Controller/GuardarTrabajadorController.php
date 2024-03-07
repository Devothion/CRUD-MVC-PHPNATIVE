<?php 
require_once('../Model/TrabajadorModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
}

$resultado = new TrabajadorModel;
$resultado->saveTrabajador($nombre, $apellido, $dni, $celular);

header('Location: TrabajadorController.php');
exit;

?>