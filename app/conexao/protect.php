<?php 

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        die("Você não pode acessar essa página! Faça login para continuar.");
    }

?>