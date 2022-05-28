<?php
    session_start();

    $nom = $_SESSION['nombre'];
    $ape = $_SESSION['apellido'];

    echo "Variables de sesión: <br>";
    echo "El nombre es: $nom <br>  El apellido es: $ape <br>";
    echo "<a href='pagina4.php'> Cerrar Sesion </a>"
?>