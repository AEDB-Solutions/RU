<!DOCTYPE HTML>
<html>
<head>
	<meta=charset="UTF-8"/>
	<title>admin RU</title>
	<style>
    .error {color: #FF0000;}
input[type=text], select {
    width: 100%;
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
	<h1><center> Bem vindo Administrador!</h1></center>
</head>
<body>
	<form action="logMF.php" method="get">
	<input type="text" placeholder="User" name="User"><br>
	<input type="text" placeholder="Senha" name="Password"><br>
	<input type="submit" value="Entrar como Administrador">
	</form>
</body>
</html>