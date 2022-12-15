<?php 
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formC.css">
</head>
<body style="text-align: center; background: rgb(254,255,13);
background: linear-gradient(90deg, rgba(254,255,13,1) 0%, rgba(230,208,0,1) 35%, rgba(255,132,0,1) 100%);">
	<div class="header">
	<div style="color: #bb1111; font-family: Arial;" class="pedidos"><h1>Pedidos</h1></div>
	</div>

	<div class="retangulo">
    					<form action="processa.php" method="post" accept-charset="utf-8" class="form-group"></div>
    						
							<div style="color: #bb1111; font-family: Arial;" class="form1"><br><label for="nome">Nome:</label></div>
                            <input style="border-radius: 10px;" type="text" name="nome" class="form-control" required>

    						<br><div style="color: #bb1111; font-family: Arial;" class="endereco"><label for="endereco">Endereço:</label></div>
    						<input style="border-radius: 10px;" type="text"  name="endereco" class="form-control" required>

    						<br><div style="color: #bb1111; font-family: Arial;" class="pedido"><label for="pedido">Pedido:</label></div>
    						<input style="border-radius: 10px;" type="text" name="pedido" class="form-control" required>


    						<br>
    						<br><input  style="box-shadow:inset 0px 1px 0px 0px #cf866c;
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
                                text-shadow:0px 1px 0px #854629;" type="submit" name="btn" value="Cadastrar" class="btn btn-success">

    						<a href="mostrar.php"  style="box-shadow:inset 0px 1px 0px 0px #cf866c;
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
                                text-shadow:0px 1px 0px #854629;" class="btn btn-info">Consultar seu pedido</a>

   						</form>
				</div>
</body>
</html>
