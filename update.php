<?php 
//ALTERENDO DADOS NO BANCO
include_once 'connection.php';

$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID ");
$stmt2= $conn->prepare("SELECT * FROM tb_usuarios");
$stmt2->execute();
$results = $stmt2->fetchAll(PDO:: FETCH_ASSOC);


$id=$_POST["id"];
$login = $_POST["nome"];
$password = $_POST["senha"];

foreach ($results as $row) { 
		
			if ($row['id_usuario'] == $id)  {
				
				$return=true;
				break;
			}else{
				$return=false;
			}
}
if($return){
	
	$stmt->bindParam(":ID",$id);
	$stmt -> bindParam(":LOGIN", $login);
	$stmt -> bindParam(":PASSWORD", $password);

	$stmt -> execute();

	echo "Inserido OK!!";
	
}else{
	echo "Não existe o id: $id";
}

echo '<a href = "insert.html"> <h1> Inicio </h1></a><br>' ;



?>