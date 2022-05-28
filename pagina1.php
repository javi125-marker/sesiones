<?php
    session_start();

    $_SESSION['nombre'] = "Javier";
    $_SESSION['apellido'] = "Rodriguez";

    echo "<a href='pagina2.html'> Ir a la página 2 </a>";
?>