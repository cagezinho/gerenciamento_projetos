<?php 

    include '../../conexao/conexao.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $criandoUsuario = "INSERT INTO
    db_users
    VALUE ('', '$name', '$email', '$pass')";

    $query_tarefas = mysqli_query($conexao, $criandoUsuario);

    header('location: ../../pages/login.php');
?>