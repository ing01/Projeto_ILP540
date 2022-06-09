<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `projeto_certo`WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

		if(count($res) > 0) {
	        foreach ($res as $row) {
                $login = $row['usuario'];
	            $senha = $row['senha'];
                $email = $row['email'];
	        }
	       
    	}	
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

    echo ("<p><a href='excluir.php?id=$id'>Excluir a conta</a>");
}
else{
    $login = "";
    $senha = "";
	$email = "";
	$aux = "";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <script src="js/validar.js"></script>
</head>
<body>
    <main>     
            <div class="caixa" id="login">
                <h1>Cadastro</h1>
                <form class="needs-validation" novalidate action="process_cadastro.php" method="post">

                    <div class="form form-row">
                        <input class="form-control" type="text" placeholder="Crie um nome de usuário" id="usuario" name="usuario" value="<?=$login?>" <?=$aux?> autofocus required><br>
                        <div class="invalid-feedback">
                            Você não criou seu nome de usuário
                        </div>
                    </div>

                    <div class="form form-row">
                        <input class="form-control" type=password placeholder="Crie uma senha" id="senha" name="senha" value="<?=$senha?>" required><br>
                        <div class="invalid-feedback">
                            Proteja sua conta! Crie a senha!
                        </div>
                    </div>

                    <div class="form form-row">
                        <input class="form-control" type="email" placeholder="Insira seu email" id="email" name="email"  value="<?=$email?>" required>
                        <div class="invalid-feedback">
                            Precisamos confirmar sua conta, insira seu email!
                        </div>
                    </div>

                    <div class="botoes">
                        <button type="submit">
                            Enviar
                        </button>
                    </div>
                    
                    <div class="registrar">
                        <a href="javascript:history.back()">Voltar</a>
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