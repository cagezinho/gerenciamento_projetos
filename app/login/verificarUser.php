<?php
    include('../conexao/conexao.php');

    if (isset($_POST['username']) || isset($_POST['password'])) {
        if (strlen($_POST['username']) == 0) {
            echo "Preencha seu username";
        } elseif (strlen($_POST['password']) == 0) {
            echo "Preencha sua senha";
        } else {
            $username = $mysqli->real_escape_string($_POST['username']);
            $senhaCriptografada = $mysqli->real_escape_string($_POST['password']);

            $sql_code = "SELECT * FROM users WHERE username = '$username'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL");

            $quantidade = $sql_query->num_rows;

            if ($quantidade == 1) {
                $usuario = $sql_query->fetch_assoc();

                if (password_verify($senhaCriptografada, $usuario['password'])) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['username'] = $usuario['username'];

                    header("Location: ../../index.php");
                } else {
                    echo "Falha ao logar! Usuário ou senha incorretos";
                }
            } else {
                echo "Falha ao logar! Usuário ou senha incorretos";
            }
        }
    }
?>