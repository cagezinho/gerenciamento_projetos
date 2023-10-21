<?php 

    include '../conexao/conexao.php';

    $id = $_POST['id'];

    $apagandoNota = "DELETE FROM
    tarefas
    WHERE id = '$id'";

    $query_apagandoNota = mysqli_query($conexao, $apagandoNota);

    header('location:../../index.php');
?>