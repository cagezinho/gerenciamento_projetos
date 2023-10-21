<?php

    $buscar_notas_fabula = "SELECT * FROM tarefas WHERE projeto = 'fábula' 
    ORDER BY data DESC, hora DESC";
    $query_notas_fabula = mysqli_query($conexao, $buscar_notas_fabula);

?>