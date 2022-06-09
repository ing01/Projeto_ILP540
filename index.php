<?php 
    $login = $senha = $check = "";
    if(isset($_COOKIE["usuario"])){
        $login = $_COOKIE["usuario"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"])){
        $senha = $_COOKIE["senha"];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <main>     
            <div class="caixa">
                <h1>Meu app</h1>
                <form class="needs-validation" action="process.php" method="post">

                    <div class="form form-row">
                        <input class="form-control" type="text" placeholder="Usuário" id="usuario" name="usuario" value="<?= $login ?>" autofocus required><br>
                        <div class="invalid-feedback">
                            É necessário inserir seu usuário!
                        </div>
                    </div>
                    
                    <div class="form form-row">
                        <input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" value="<?= $senha ?>" required><br>
                        <div class="invalid-feedback">
                            Insira sua senha!
                        </div>
                    </div>

                    <div class="save">
                        <input type="checkbox" name="salvar" <?= $check ?>> Salvar dados ao logar
                    </div>

                    <div class="esquecer">
                        <a href="forgot.html">Esqueci minha senha</a>
                    </div>

                    <div class="botoes">
                        <button type="submit">
                           Entrar
                        </button>
                    </div>
                          
                    <div class="registrar">
                        <span>Não possui uma conta?<a href="cadastro.php">Cadastre-se!</a></span>
                    </div>
                </form>
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