<?php
    include('../conexao/conexao.php');

    if(strlen($_POST['name']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['pass']) == 0) {

        header('location:https://projetos.nicolascage.dev.br/app/pages/criar-conta.php');

    } else {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

        $criar_conta = "INSERT INTO
        db_users
        VALUE ('', '$name', '$email', '$pass_hash')";
    
        $query_users = mysqli_query($conexao, $criar_conta);
    
        header('location:https://projetos.nicolascage.dev.br/login.php');
    }

?>