<?php
    include('conexao.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $criar_conta = "INSERT INTO
    db_users
    VALUE ('', '$name', '$email', '$pass')";

    $query_users = mysqli_query($mysqli, $criar_conta);

    header('location:login.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
</head>
<body>
    <h1>Crie sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>Name</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="pass">
        </p>
        <p>
            <button type="submit">Criar Conta</button>
        </p>
    </form>
</body>
</html>