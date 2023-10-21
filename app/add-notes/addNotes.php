<?php
    include('../conexao/conexao.php');

    $notas = $_POST['notas'];
    $projeto = $_POST['projeto'];
    date_default_timezone_set('America/Sao_Paulo');
    $horaAtual = date("H:i:s");
    $dataAtual = date("Y-m-d");

    $adicionar_notas = "INSERT INTO
    tarefas
    VALUE ('', '$projeto', '$horaAtual', '$dataAtual', '$notas' )";

    $query_item = mysqli_query($mysqli, $adicionar_notas);

    header('location: ../../index.php');
?>
