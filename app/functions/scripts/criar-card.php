<?php
// Inclua o arquivo de conexão
include('../conexao/conexao.php');

// Verifique se a requisição é um POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crie o novo bloco .card (pode ser adaptado conforme necessário)
    $novoCard = '
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="Imagem do projeto">
        <div class="card-body">
            <h5 class="card-title">Novo Card</h5>
            <p class="card-text">Este é um novo card adicionado dinamicamente.</p>
            <a href="#" class="btn btn-primary">Ir para algum lugar</a>
        </div>
    </div>';

    // Saída do novo card
    echo $novoCard;
}
?>
