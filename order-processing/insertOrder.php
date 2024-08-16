<?php 
 
include_once 'dbConnect.php';

	$nome 	= isset($_POST['nome']) == true ?$_POST['nome']:"";
	$endereco	= isset($_POST['endereco']) == true ?$_POST['endereco']:"";
	$pedido  = isset($_POST['pedido']) == true ?$_POST['pedido']:"";

	$sql = "INSERT INTO tb_cadpedido (nome, endereco, pedido) VALUES ('$nome', '$endereco', '$pedido')";

		if ($conn->query($sql) == TRUE) {

			header('Location: ../user-interface/listOrders.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();