<?php 
session_start();

    if ($_SESSION['id_asistente']){	
        unset($_SESSION);
        session_destroy();
        header("Location: inicio.php");
    }

?>
