<?php 
	$conn = mysqli_connect("localhost", "root", "", "db_pedidos"); 
	if(!$conn) die("Falha na conexao: " . mysqli_connect_error());
