<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from tb_cadpedido");

	while ($dados = $consultar->fetch_assoc()) {

		$id 	= $dados['id'];
		$nome 	= $dados['nome'];
		$endereco	= $dados['endereco'];
		$pedido	= $dados['pedido'];


		echo "<tr>";
			echo "<td>$id<td>$nome<td>$endereco<td>$pedido";
			echo "<td><a href='form_editar.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='delete.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}

?>