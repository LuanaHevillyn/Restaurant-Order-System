<?php 

	include_once 'dbConnect.php';

	$id = $_GET['id'];

	$deletar = $conn->query("delete from tb_cadpedido where id='$id'");

	if (mysqli_affected_rows($conn) > 0) {

		header("Location: ../user-interface/listOrders.php'.php");
	}
