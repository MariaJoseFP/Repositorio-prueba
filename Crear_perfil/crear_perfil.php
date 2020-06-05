<?php
    include_once ("conexionBD.php");
    if(isset($_REQUEST['nombre'])) {
        $nombre = $NOMBRE = $_REQUEST['nombre'];

        if (!empty($nombre)) {
            if ($result = $db->query("SELECT * FROM usuarios WHERE nombre = '$nombre'")) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if (isset($row)) {
                    echo "Ya existe un perfil con este nombre";
                }
            }
        }
    }
?>