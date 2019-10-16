<?php 
include_once 'connection.php';

//ADICIONANDO DADOS NO BANCO


$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login,des_senha) VALUES (:LOGIN, :PASSWORD)");

$login = $_POST["nome"];
$password =$_POST["senha"];

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "Inserido OK!!";
echo '<a href = "insert.html"> <h1> Inicio </h1></a><br>' ;
?>