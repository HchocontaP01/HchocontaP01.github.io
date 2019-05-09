<?php
    
    include_once 'usuario_sesion.php';

    $userSession = new UserSession();
    $userSession->closeSession();
    
    header("location: ../index.php");
?>