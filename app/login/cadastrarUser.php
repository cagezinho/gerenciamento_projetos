<?php 

    include ('../conexao/conexao.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $senhaCriptografada = password_hash($password, PASSWORD_DEFAULT);

    $cadastro_user = "INSERT INTO
    users
    VALUE ('', '$username','$senhaCriptografada', '$email' )";

    $query_user = mysqli_query($mysqli, $cadastro_user);

    header('location: ../pages/signin.php');
?>