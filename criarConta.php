<?php
    include('conexao.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $criar_conta = "INSERT INTO
    db_users
    VALUE ('', '$name', '$email', '$pass')";

    $query_users = mysqli_query($conexao, $criar_conta);

    header('location:login.php');

?>