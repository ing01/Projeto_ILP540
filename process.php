<?php
include("conecta.php");

$login = $_POST["usuario"];
$senha = $_POST["senha"];

try {
	
	$sql = "SELECT * FROM `projeto_certo` 
		WHERE `usuario` = '$login' AND `senha` = '$senha'";
	
	$res = $conn->query($sql)->fetchAll();

	echo(count($res));

	if(count($res) > 0) {
    	foreach ($res as $row) {
            $id = $row['ID'];
        }
        
	    if(isset($_POST["salvar"])){
			setcookie("usuario",$login);
			setcookie("senha",$senha);
		}

		else{
			setcookie("usuario",$login,time()-1);
			setcookie("senha",$senha,time()-1);
		}

		if(!isset($_SESSION)) 
			session_start();
			
		$_SESSION["id_usuario"] = $id;
		
		header("Location:logado.php");
    }

  	else {
    	header("Location:index.php");
    }

} catch(PDOException $e) {
	echo $sql . "Falha!" . $e->getMessage();
}
$conn = null;

?>