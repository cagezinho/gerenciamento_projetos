<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'gerenciamento_projetos';

    $mysqli = new mysqli($host, $user, $pass, $db);

    $conexao = mysqli_connect($host, $user, $pass, $db);

    if($mysqli->error){
        die("Falha ao conectar ao banco de dados!");
    }
?>