<?php 

    $host = '';
    $user = 'nicol530_main';
    $pass = 'Ooa^FVukFbqK(gdB%O';
    $db = 'nicol530_main';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if($mysqli->error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    }
?>
