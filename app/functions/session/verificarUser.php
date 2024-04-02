<?php

  include('../conexao/conexao.php');

if(isset($_POST['email']) || isset($_POST['pass'])) {

        if(strlen($_POST['email']) == 0) {
            
        } else if(strlen($_POST['pass']) == 0) {
            
        } else {

            $email = $mysqli->real_escape_string($_POST['email']);
            $pass = $mysqli->real_escape_string($_POST['pass']);

            $sql_code = "SELECT * FROM db_users WHERE email = '$email' AND pass = '$pass'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['name'];

                header("Location: ../pages/painel.php");

            } else {
                
            }

        }

    }

?>







    // include('../conexao/conexao.php');

    // $email = $_POST['email'];
    // $pass = $_POST['pass']






    // if(isset($_POST['email']) || isset($_POST['pass'])) {

    //     if(strlen($_POST['email']) == 0) {
            
    //     } else if(strlen($_POST['pass']) == 0) {
            
    //     } else {

    //         $email = $mysqli->real_escape_string($_POST['email']);
    //         $pass = $mysqli->real_escape_string($_POST['pass']);

    //         $sql_code = "SELECT * FROM db_users WHERE email = '$email' AND pass = '$pass'";
    //         $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    //         $quantidade = $sql_query->num_rows;

    //         if($quantidade == 1) {
                
    //             $usuario = $sql_query->fetch_assoc();

    //             if(!isset($_SESSION)) {
    //                 session_start();
    //             }

    //             $_SESSION['id'] = $usuario['id'];
    //             $_SESSION['name'] = $usuario['name'];

    //             header("Location: painel.php");

    //         } else {
                
    //         }

    //     }

    // }
