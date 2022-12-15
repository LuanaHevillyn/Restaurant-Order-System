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
<body>
	<div class="header">
	<div class="pedidos">Pedidos</div>
	</div>

	<div class="retangulo">
    					<form action="processa.php" method="post" accept-charset="utf-8" class="form-group"></div>
    						
							<div class="form1"><br><label for="nome">Nome:</label></div>
<input   type="text" name="nome" class="form-control" required>

    						<br><div class="endereco"><label for="endereco">Endereço:</label></div>
    						<input type="text" style="box-sizing: border-box; position: absolute; width: 676px;height: 76px;left: 378px;top: 680px; background: #FFFFFF;border: 2px solid #000000;border-radius: 11px;"  name="endereco" class="form-control" required>

    						<br><div class="pedido"><label for="pedido">Pedido:</label></div>
    						<input style="box-sizing: border-box;position: absolute;width: 676px;height: 76px;left: 378px;top: 887px;background: #FFFFFF;border: 2px solid #000000;border-radius: 11px;" type="text" name="pedido" class="form-control" required>

							<div class="formfloating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
    						<br>
    						<br><input type="submit" name="btn" value="Cadastrar" class="btn btn-success">

    						<a href="mostrar.php" class="btn btn-info">Consultar seu pedido</a>

   						</form>
				</div>
</body>
</html>