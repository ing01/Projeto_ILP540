<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_certo";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conexão sucedida!";
} catch(PDOException $e){
   // echo "Conexão falha!" . $e->getMessage();
}
?>