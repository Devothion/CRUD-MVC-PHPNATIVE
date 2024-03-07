<?php  

require_once('../DataBase/database.php');

class TrabajadorModel
{
    private $db;
    private $trabajadores;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->trabajadores = array();
    }

    public function getTrabajadores()
    {
        $consulta = $this->db->query('SELECT * FROM  trabajadores;');
        while ($filas = $consulta->fetch_assoc()) {
            $this->trabajadores[] = $filas;
        }
        return $this->trabajadores;
    }

    public function saveTrabajador($nombre, $apellido, $dni = '', $celular = '')
    {
        $consulta = $this->db->query("INSERT INTO trabajadores (nombre, apellido, dni, celular) VALUES ('$nombre', '$apellido', '$dni', '$celular')");
        if ($consulta) {
            echo "El trabajador se ha registrado correctamente";
        }
    }

    public function getTrabajador($id)
    {
        $consulta = $this->db->query("SELECT * FROM trabajadores WHERE id = '$id'");
        while ($fila = $consulta->fetch_assoc()) {
            $this->trabajadores[] = $fila;
        }
        return $this->trabajadores;
    }

    public function updateTrabajador($id, $nombre, $apellido, $dni, $celular)
    {
        $consulta = $this->db->query("UPDATE trabajadores SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', celular = '$celular' WHERE id = '$id'");
        if ($consulta) {
            echo "Se ha actualizado en trabajador exitosamente";
        }
    }

    public function deleteTrabajador($id)
    {
        $consulta = $this->db->query("DELETE FROM trabajadores WHERE id = '$id'");
        if ($consulta) {
            echo "Se ha eliminado al trabajador con exito";
        }
    }

}

?>