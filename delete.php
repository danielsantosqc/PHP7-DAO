<?php 
//DELETANDO DADOS NO BANCO
include_once 'connection.php';

$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE id_usuario = :ID ");

$stmt2= $conn->prepare("SELECT * FROM tb_usuarios");
$stmt2->execute();
$results = $stmt2->fetchAll(PDO:: FETCH_ASSOC);

$id=$_POST["id"];

foreach ($results as $row) { //$row indice que vai linha por linha
		
			if ($row['id_usuario'] == $id)  {
				$login=$row['des_login'];
				$password=$row['des_senha'];
				$return=true;
				break;
			}else{
				$return=false;
			}
}
if($return){
	$stmt->bindParam(":ID",$id);
	$stmt -> execute();
	echo "Nome: $login<br>";
	echo"Senha: $password<br>";
	echo" <br>Deletado com sucesso";
	echo '<a href = "insert.html"> <h1> Inicio </h1></a><br>' ;
	
}else{
	echo "Não existe o id: $id";
}

?>

