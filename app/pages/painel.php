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
            <img src="../image/logo-liveseo.png" alt="Logo da empresa liveSEO">
        </div> <!-- logo -->
        <div class="profile">
            <p><?php echo $_SESSION['name']; ?></p>
        </div> <!-- profile -->
        <div class="sidebar-footer">
          <a class="logout" href="../functions/session/logout.php">Sair</a>
        </div> <!-- sidebar-footer -->
    </div> <!-- sidebar -->

    <div class="container-principal">
      <div class="header">

      </div> <!-- header -->
      <div class="content">
        <div class="content-tarefas">
          <div class="content-tarefas-header">
            <h1>Projetos</h1>
          </div> <!-- content-tarefas-header -->
            <div class="content-tarefas-main">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="Imagem do projeto">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div> <!-- card-body -->
            </div>
          </div> <!-- content-tarefas-main -->
        </div><!-- content-tarefas -->
      </div><!-- content -->
    </div><!--container-principal -->

  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
