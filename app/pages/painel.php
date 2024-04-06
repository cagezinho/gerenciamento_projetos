<?php
    include('../functions/session/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/app/styles/painel.css">
  <title>Painel</title>
</head>
<body>

  <main>
    <div class="sidebar">
        <div class="logo">
            <img src="../image/png-transparent-logo-graphic-design-systems-design-industry-circulating-lines-company-service-happy-birthday-vector-images.png" alt="">
            <span>E-Corp</span>
        </div>
        <div class="profile">
            <p href="#">Bem-vindo ao painel, <?php echo $_SESSION['name']; ?>.</p>
        </div>
        <a class="logout" href="../functions/session/logout.php">Sair</a>
    </div>

    <div class="container-principal">
      <div class="header">
        </div>
      <div class="content">
        <div class="content-tarefas">
            <h1>Lista de tarefas</h1>
        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
