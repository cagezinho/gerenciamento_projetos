<?php 

    $host = '';
    $user = 'nicol530_nicolascage';
    $pass = 'StfHZU4XbAJc4rV';
    $db = 'nicol530_gerenciamento_projetos';

    $mysqli = new mysqli($host, $user, $pass, $db);

    $conexao = mysqli_connect($host, $user, $pass, $db);

    if($mysqli->error){
        die("Falha ao conectar ao banco de dados!");
    } else {
        echo "conexao ok";
    }
?>