<?php 

    $host = '';
    $user = 'nicol530_tarefas';
    $pass = ';HGS-=x;OK}$';
    $db = 'nicol530_tarefas';

    $mysqli = new mysqli($host, $user, $pass, $db);

    $conexao = mysqli_connect($host, $user, $pass, $db);

    if($mysqli->error){
        die("Falha ao conectar ao banco de dados!");
    } else {
        echo "conexao ok";
    }
?>
