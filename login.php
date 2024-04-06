<?php
    include('app/functions/conexao/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/styles/login.css">
    <title>Login</title>
</head>
<body>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
		<defs>
			<linearGradient id="bg">
				<stop offset="0%" style="stop-color:rgba(0, 0, 0, 0.945);"></stop>
				<stop offset="50%" style="stop-color:rgba(30, 30, 30, 0.884)"></stop>
				<stop offset="100%" style="stop-color:rgba(65, 65, 65, 0.904)"></stop>
			</linearGradient>
			<path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
		</defs>
		<g>
			<use xlink:href='#wave' opacity=".3">
				<animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="10s"
                    calcMode="spline"
                    values="270 230; -334 180; 270 230"
                    keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacity=".6">
				<animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="8s"
                    calcMode="spline"
                    values="-270 230;243 220;-270 230"
                    keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacty=".9">
				<animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="translate"
                    dur="6s"
                    calcMode="spline"
                    values="0 230;-140 200;0 230"
                    keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                    repeatCount="indefinite" />
			</use>
		</g>
	</svg> 

    <form class="form" action="app/functions/session/verificarUser.php" method="post">
        <div class="title">Bem-vindo,<br><span>faça login para continuar</span></div>
        <input type="text" placeholder="Email" name="email" class="input" id="email">
        <input type="password" placeholder="Password" name="pass" class="input" id="pass">
        <span id="erro">*usuário ou senha incorretos</span>
        <div class="buttons">
            <button type="submit" class="button-confirm">Entrar</button>
            <a href="app/pages/criar-conta.php" class="button-create">Criar conta</a>
        </div>

    </form>

    <script src="../gerenciamento_projetos/app/functions/scripts/login.js"></script>
</body>
</html>