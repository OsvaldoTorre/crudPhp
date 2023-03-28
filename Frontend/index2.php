<?php
include("../Backend/Conexion/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function conectar() {
            var result = "<?php Conexion::obtenerConexion(); ?>"
            console.log(result);
        }
        function desconectar() {
            var result = "<?php Conexion::CerrarConexion(); ?>"
            console.log(result);
            
        }
    </script>
    <button onclick="conectar()"> CONECTAR </button>
    <button onclick="desconectar()"> DESCONECTAR </button>
    
</body>

</html>
