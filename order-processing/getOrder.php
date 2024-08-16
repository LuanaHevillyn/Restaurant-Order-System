<?php 

	include_once 'dbConnect.php';

	$consultar = $conn->query("select * from tb_cadpedido");

	while ($dados = $consultar->fetch_assoc()) {

		$id 	= $dados['id'];
		$nome 	= $dados['nome'];
		$endereco	= $dados['endereco'];
		$pedido	= $dados['pedido'];

		echo "<tr>";
			echo "<td>$id<td>$nome<td>$endereco<td>$pedido";
			echo "<td><a href='../user-interface/editOrder.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteOrder.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}