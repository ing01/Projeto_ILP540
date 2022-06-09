<?php
include("conecta.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		$id = $_SESSION["id_usuario"];
		$location = "Location:logado.php";
		$sql = "UPDATE `projeto_certo` SET `email`='$email', `senha`='$senha' WHERE `id`=$id";
		header($location);
	}
	else{
		$login = $_POST["usuario"];
		$location = "Location:index.php";
		$sql = "INSERT INTO projeto_certo (`id`, `usuario`, `senha`, `email`) VALUES (NULL, '$login','$senha','$email')";
		$cadastro = "location:usuario_cadastrado.php";
		header($location);
	}
}
try {	
	$conn->exec($sql);
			
} catch(PDOException $e) {
	header($cadastro);
	//echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>