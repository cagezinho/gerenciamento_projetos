<?php

  include('app/functions/conexao/conexao.php');

  // Evita injeção de SQL limpando a entrada do usuário
  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Criptografa a senha para segurança

  // Monta a consulta usando prepared statement para evitar injeção de SQL
  $consulta_sql = "SELECT * FROM db_users WHERE email = ?";
  $stmt = $mysqli->prepare($consulta_sql);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $resultado = $stmt->get_result();

  // Verifica se o usuário existe
  $quantidade = $resultado->num_rows;

  if ($quantidade == 1) {
    $usuario = $resultado->fetch_assoc();

    // Valida a senha usando a função password_verify
    if (password_verify($_POST['pass'], $usuario['pass'])) {
      // Inicia a sessão se ainda não estiver iniciada
      if (!isset($_SESSION)) {
        session_start();
      }

      // Armazena dados do usuário na sessão
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['name']; // Assume que 'name' é o nome do campo na tabela

      // Redireciona para painel.php em caso de login bem-sucedido (sem echo necessário)
      header("Location: painel.php");
      exit(); // Garante que o script não continue após o login bem-sucedido
    } else {
      // Usuário encontrado, mas a senha não confere - lida com falha de login silenciosamente (sem echo)
      // Você pode redirecionar para uma página de erro de login aqui
    }
  } else {
    // Usuário não encontrado (quantidade == 0) - lida com falha de login silenciosamente (sem echo)
    // Você pode redirecionar para uma página de erro de login aqui
  }

  // Fecha o statement e a conexão (opcional - pode ser feito em conexao.php)
  $stmt->close();
  $mysqli->close();

?>







    <!-- // include('../conexao/conexao.php');

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

    // } -->
