<?php include_once '../order-processing/dbConnect.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="text-align: center; background: rgb(254,255,13);
background: linear-gradient(90deg, rgba(254,255,13,1) 0%, rgba(230,208,0,1) 35%, rgba(255,132,0,1) 100%);">
	<?php 

		include_once '../order-processing/dbConnect.php';

		$id = $_GET['id'];
	
		$consultar = $conn->query("select * from tb_cadpedido where id='$id'");

		while($dados = $consultar->fetch_assoc()){
			$nome   = $dados['nome'];
			$endereco	= $dados['endereco'];
			$pedido 	= $dados['pedido'];
		}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div style="color: #bb1111; font-family: Arial;" class="panel-heading text-center display-4"><h2>ALTERAR DADOS</h2></div>

    				<form action="../order-processing/updateOrder.php?id=<?php echo $id;?>"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label style="color: #bb1111; font-family: Arial;" for="nome">Nome:</label>
    					<input type="text" name="nome" value="<?php echo $nome;?>" class="form-control">
    					<br>
                        <br>
    					<label style="color: #bb1111; font-family: Arial;" for="endereco">Endereço:</label>
    					<input type="text" name="endereco" value="<?php echo $endereco;?>" class="form-control">
                        <br>
                        <br>
    					<label style="color: #bb1111; font-family: Arial;" for="pedido">Pedidos:</label>
    					<input type="text" name="pedido" value="<?php echo $pedido;?>" class="form-control">
                        <br>
    					<br>
                        <br>
    					<input style="box-shadow:inset 0px 1px 0px 0px #cf866c;
                                background:linear-gradient(to bottom, #bb1111 5%, #bc3315 100%);
                                background-color:#bb1111;
                                border-radius:9px;
                                border:1px solid #942911;
                                display:inline-block;
                                cursor:pointer;
                                color:#ffffff;
                                font-family:Arial;
                                font-size:13px;
                                padding:9px 24px;
                                text-decoration:none;
                                text-shadow:0px 1px 0px #854629;" type="submit" name="btn" value="ALTERAR" class="btn btn-success">
							<a style="box-shadow:inset 0px 1px 0px 0px #cf866c;
									background:linear-gradient(to bottom, #bb1111 5%, #bc3315 100%);
									background-color:#bb1111;
									border-radius:9px;
									border:1px solid #942911;
									display:inline-block;
									cursor:pointer;
									color:#ffffff;
									font-family:Arial;
									font-size:13px;
									padding:9px 24px;
									text-decoration:none;
									text-shadow:0px 1px 0px #854629;" href="listOrders.php" class="btn red">Cancelar
							</a>
    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>
