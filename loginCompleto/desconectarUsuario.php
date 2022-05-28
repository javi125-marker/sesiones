<?php
    //Inicializar la sesión
    session_start();

    //Controlar si se ingresa directamente sin loggue
    if(!$_SESSION['nombre']!=null){
        session_destroy();
        header('location: index.html');
    }else{
        
        header('location: index.html');
    }


?>