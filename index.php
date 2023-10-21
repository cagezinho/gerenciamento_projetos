<?php 
    include('../conexao/protect.php');
    include('../conexao/conexao.php');
    include('../functions/pesquisa.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/index.css">
    <link rel="stylesheet" href="../../styles/painel.css">
    <title>Home</title>
</head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <span>
                                <img class="logo" src="../../img/logo-live.png" alt="">
                            </span>
                            <p class="nav-saudacoes">Olá
                                <?= 
                                    strtoupper($_SESSION['username']) . ", bem-vindo de volta!";
                                ?>
                            </p>
                        </ul>
                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Meu perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configuração</a></li>
                                <li><a class="dropdown-item sair" href="../login/logout.php">Sair <img id="img-logout" src="../../img/sign-out-alt.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-links-importantes">
            <h1>Links importantes</h1>
            <div class="links-importantes">
                <ul>
                    <li><a href="#">Meet - Gamma</a></li>
                    <li><a href="#">Meet - Técnico</a></li>
                </ul>
                <ul>
                    <li><a href="#">Planilha Gamma</a></li>
                    <li><a href="#">Códice</a></li>
                </ul>
            </div>
        </div>
        <div class="container-list">
            <div class="container-head">
                <h1>Projetos - Gamma</h1>
            </div><!-- container-head -->
            <div class="container-body">
            <div class="row-projetos">
                <div class="card">
                    <img src="../../img/fabula.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fábula</h5>
                        <p class="card-text"><strong>GASC:</strong></p>
                        <p class="card-text"><strong>Drive:</strong></p>   
                    </div>
                    <div class="card-footer">
                        <button class="Btn" type="button" data-bs-toggle="modal" data-bs-target="#modal-fabula">Editar 
                                <svg class="svg" viewBox="0 0 512 512">
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                        </button>
                        <a href="#" class="link-codice">
                            <img clasS="link-codice-img" src="../../img/file.svg" alt="Códice">
                        </a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-xl fade" id="modal-fabula" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Fábula</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../add-notes/addNotes.php" class="notas" method="post">
                                    <label for="notas">Anotação:</label>
                                    <textarea name="notas" id="notas" cols="80" rows="6" required style="resize: none;"></textarea>
                                    <p>A hora atual é <span id="hora"></span> - <span id="data"></span></p>
                                    <input type="hidden" name="projeto" value="fabula">
                                        <button class="button1" type="submit">
                                            <span class="button__text">Add Item</span>
                                            <span class="button__icon"><svg class="svg1" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
                                        </button>
                                </form>
                                <div class="modal-container">
                                    <div class="modal-item">
                                        <table class="modal-table">
                                            <tr class="modal-table-head">
                                                <th class="table-data head">Data</th>
                                                <th class="table-horas head">Hora</th>
                                                <th class="table-notas head">Notas</th>
                                                <th class="table-options head"></th>
                                                <th class="table-options head"></th>
                                            </tr>
                                            <?php 
                                                while($db_fabula = mysqli_fetch_array($query_notas_fabula)){

                                                    $id = $db_fabula['id'];
                                                    $hora = $db_fabula['hora'];
                                                    $data = $db_fabula['data'];
                                                    $notas = $db_fabula['notas'];
                                                    $dataFormat = date("d/m/Y", strtotime($data));
                                            ?>
                                            <tr class="table-itens">
                                                <td class="table-data"> <?= $dataFormat ?></td>
                                                <td class="table-horas"> <?= $hora ?></td>
                                                <td class="table-notas"> <?= $notas ?></td>
                                                <td class="table-options"> 
                                                    <label class="container">
                                                        <input type="checkbox" name="taskCheck" id="taskCheck">
                                                        <div class="checkmark"></div>
                                                    </label>
                                                </td>
                                                <td class="table-options"> 
                                                    <form action="../functions/excluir-nota.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                                        <button class="excluirItem" type="submit">
                                                            <svg viewBox="0 0 15 17.5" height="17.5" width="15" xmlns="http://www.w3.org/2000/svg" class="icon">
                                                            <path transform="translate(-2.5 -1.25)" d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z" id="Fill"></path>
                                                            </svg>
                                                        </button>
                                                    </form> 
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="noselect" data-bs-dismiss="modal"><span class="text">Fechar </span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- container-body -->
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="../../js/relogio.js"></script>
    <script>
    // Selecione todos os elementos com o nome "taskCheck"
    var checkboxes = document.querySelectorAll('input[name="taskCheck"]');
    var linhas = document.querySelectorAll('.table-itens');

    checkboxes.forEach(function(checkbox, index) {
        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                linhas[index].classList.add('linha-verde');
            } else {
                linhas[index].classList.remove('linha-verde');
            }
        });
    });
    </script>
</body>
</html>