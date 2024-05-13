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
            <img src="../image/logo-white.png" alt="Logo da empresa liveSEO">
        </div> <!-- logo -->
        <div class="profile">
            <p><?php echo $_SESSION['name']; ?></p>
        </div> <!-- profile -->
        <div class="sidebar-footer">
          <a class="logout" href="../functions/session/logout.php">Sair</a>
        </div> <!-- sidebar-footer -->
    </div> <!-- sidebar -->

<!-- SIDEBAR --------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- container-principal -->
<div class="container-principal">
    <!-- header -->
    <div class="header">
        <!-- Formulário para criar card -->
        <form id="criarCardForm" action="../functions/scripts/criar-card.php" method="post">
            <button type="button" id="criarCardBtn">Criar Card</button>
        </form>
    </div> <!-- header -->

    <!-- content -->
    <div class="content">
        <!-- Container para os cards -->
        <div class="content-tarefas">
            <!-- content-tarefas-header -->
            <div class="content-tarefas-header">
                <h1>Projetos</h1>
            </div> <!-- content-tarefas-header -->

            <!-- content-tarefas-main -->
            <div class="content-tarefas-main" id="cardsContainer">
                <!-- Aqui serão inseridos os cards dinamicamente -->
            </div> <!-- content-tarefas-main -->
        </div><!-- content-tarefas -->
    </div><!-- content -->
</div><!--container-principal -->


  </main>


  <!-- SCRIPTS --------------------------------------------------------------------------------------------------------------------------------------------- -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('criarCardBtn').addEventListener('click', function() {
        // Requisição AJAX para criar o card
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../functions/scripts/criar-card.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Adicionar o novo card ao container
                document.getElementById('cardsContainer').innerHTML += xhr.responseText;
            }
        };
        xhr.send();
    });
});

  </script>
</body>
</html>
