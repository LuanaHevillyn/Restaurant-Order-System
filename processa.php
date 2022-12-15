<?php 
 
include_once 'conexao.php';

	$nome 	= isset($_POST['nome']) == true ?$_POST['nome']:"";
	$endereco	= isset($_POST['endereco']) == true ?$_POST['endereco']:"";
	$pedido  = isset($_POST['cargo']) == true ?$_POST['pedido']:"";

	//inserir dados no banco de dados.

	$sql = "INSERT INTO tb_cadpedido (nome, endereco, pedido) VALUES ('$nome', '$endereco', '$pedido')";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrar.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>