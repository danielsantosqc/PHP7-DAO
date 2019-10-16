<?php
include_once 'connection.php';

	$stmt= $conn->prepare("SELECT * FROM tb_usuarios");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO:: FETCH_ASSOC);

	//var_dump($results);
/*
	 $mostrar = json_encode($results);
	 echo($mostrar);
*/
	
	foreach ($results as $row) { 
		foreach ($row as $key => $value) { 
			echo $key.":  "."<strong>$value</strong><br>";
		}
		echo "================================<br>";
	}

	echo '<a href = "insert.html"> <h1> Inicio </h1></a><br>' ;

?>
