function atualizarDataHora() {
    var agora = new Date();
    var hora = agora.getHours();
    var minutos = agora.getMinutes();
    var segundos = agora.getSeconds();
    
    // Formate a data para o padrão "DD/MM/AAAA"
    var dia = agora.getDate();
    var mes = agora.getMonth() + 1; // Os meses são baseados em zero, então adicione 1
    var ano = agora.getFullYear();
    
    // Adicione zeros à esquerda, se necessário, para manter o formato "DD/MM/AAAA"
    if (mes < 10) mes = "0" + mes;
    if (dia < 10) dia = "0" + dia;
    
    var dataFormatada = dia + "/" + mes + "/" + ano;

    document.getElementById("hora").textContent = hora + ":" + (minutos < 10 ? "0" : "") + minutos + ":" + (segundos < 10 ? "0" : "") + segundos;
    document.getElementById("data").textContent = dataFormatada;

    // Defina os valores dos campos ocultos para o envio
    document.getElementById("hora_enviar").value = hora + ":" + minutos + ":" + segundos;
    document.getElementById("data_enviar").value = dataFormatada;
}

// Atualiza a data e hora a cada segundo
setInterval(atualizarDataHora, 1000);

// Chama a função para exibir a data e hora inicial
atualizarDataHora();