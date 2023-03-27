<?php
class Conexion
{
    private static $conexionState = null;

    private function __construct($file = '../backend_settings.ini')
    {
        $settings = parse_ini_file($file, TRUE);
        try {
            $mysqli = new mysqli(
                $settings['DB']['HOST'],
                $settings['DB']['USERNAME'],
                $settings['DB']['PASSWORD'],
                $settings['DB']['DATABASE'],
                $settings['DB']['PORT']
            );
            Conexion::$conexionState = $mysqli;
            echo "Conectado correctamente.";
        } catch (\Throwable $th) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
    }

    public static function obtenerConexion()
    {
        if (Conexion::$conexionState == null) {
            new Conexion();
            echo "Conexion creada y obtenida";
        } else {
            echo "Conexion obtenida";
        }
        return Conexion::$conexionState;
    }

    public static function CerrarConexion()
    {
        mysqli_close(Conexion::$conexionState);
    }

}
?>