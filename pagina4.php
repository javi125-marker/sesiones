<?php
    session_start();

    session_unset();
    session_destroy();
    echo "La sesión ha sido cerrada";

    $name = $_SESSION['name'];
    $apellido = $_SESSION['apellido'];

    echo "El nombre es: $name <br> El apellido es: $apellido <br>";
    echo "Se cerró la sesión correctamente <br>";
    echo "<a href='pagina3.php'> Regresar a  pagina 3 </a>"
    
?>