<?php

include('../conexao/conexao.php');

if (isset($_POST['email']) || isset($_POST['pass'])) {

    if (strlen($_POST['email']) == 0) {
        header("location:https://projetos.nicolascage.dev.br/login.php");
    } else if (strlen($_POST['pass']) == 0) {
        header("location:https://projetos.nicolascage.dev.br/login.php");
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $pass = $mysqli->real_escape_string($_POST['pass']);

        $sql_code = "SELECT * FROM db_users WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            $hash_da_senha = $usuario['pass']; // Extraia o hash da senha armazenado

            if (password_verify($_POST['pass'], $hash_da_senha)) { // Verifique a senha com o hash

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['name'];

                header("Location:https://projetos.nicolascage.dev.br/app/pages/painel.php");

            } else {
                header("Location:https://projetos.nicolascage.dev.br/login.php?erro"); // Senha incorreta
            }

        } else {
            header("Location:https://projetos.nicolascage.dev.br/login.php?erro"); // Usuário não encontrado
        }

    }
}

?>
