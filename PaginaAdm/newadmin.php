<!DOCTYPE html>
<html>
	<head>
		<style>
			input[type=text], select {
    		width: 30%;
    		padding: 12px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		box-sizing: border-box;
			}
			input[type=password], select {
    		width: 30%;
    		padding: 12px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		box-sizing: border-box;
			}

			input[type=submit] {
    		width: 100%;
    		background-color: #4CAF50;
    		color: white;
    		padding: 14px 20px;
    		margin: 8px 0;
    		border: none;
    		border-radius: 4px;
    		cursor: pointer;
			}

			input[type=submit]:hover {
    		background-color: #45a049;
			}

			div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
		</style>
		<title>Criação de novo administrador</title>
	</head>
	<body>
		<form action="CreateAdmin.php" method="get">
		<input type="text" placeholder="User" name="User" value=""><br>
		<input type="password" placeholder="Senha" name="Password" value=""><br>
		<input type="text" placeholder="Nome de Usuario" name="Nome" value=""><br>
		<input type="text" placeholder="Cargo do Usuario" name="Cargo" value=""><br>
		<input type="submit" value="Cadastrar novo Administrador">
		</form>
	</body>
</html>

