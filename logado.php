<?php include("autentica.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/logado.css">
</head>
<body>
    <main>     
        <div class="caixa">
            <h1>Meu app</h1>
            <form action="process.php" method="post">
                <div class="form">
                    <a>Novo Jogo</a>
                </div>

                <div class="form">
                    <a>Continuar</a>
                </div>

                <div class="form">
                    <a href="">Configurações</a>
                </div>

                <div class="form">
                    <a href="">Sobre o Jogo</a>
                </div>

                <div class="form">
                    <a href="cadastro.php">Atualizar dados</a>
                </div>	
                
                <div class="form">
                    <a href="logout.php">Sair</a>
                </div>      
    </main>
<footer>
    <p>Copyright © 2022 - Todos os direitos reservados</p>
</footer>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
        
    <script src="js/popper.min.js" ></script>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>