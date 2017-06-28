<?php
session_start();
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login admin</title>
		<style>
			.button {
    		background-color: #4CAF50;
   	 		border: none;
    		color: white;
    		padding: 15px 32px;
    		text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
    		margin: 4px 2px;
    		cursor: pointer;
    		width: 450px;
		</style>
		<h1><center>Bem vindo <?php echo $_SESSION["User"];?></center></h1>
	</head>
	<body>
		<div align = "center"/>  
			<form action="extratoadm.php">
				<input type="submit" value="Checar Extrato"  class="button"/>
			</form>
		</div>  
		<div align="center" />
			<form action="newadmin.php">
				<input type="submit" value="Criar novo Administrador"  class="button"/>
			</form>
		</div>
		<div align="center" />
			<form action="extratoadm.php">
				<input type="submit" value="Validar entrada"  class="button"/>
			</form>
		</div>

<!--<input type="botao" value="Criar um novo administrador">-->
	</body>
</html>