<?php
// define variables and set to empty values

$user = $_GET["User"];
$nome = $_GET["Nome"];
$password = $_GET["Password"];
$cargo = $_GET["Cargo"];
$cript = hash('sha256', $password);
include ('connectDB.php');
$sql = "INSERT INTO Admins (User, Nome, Cargo, Senha) VALUES ('$user', '$nome', '$cargo', '$cript')";
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;
if(mysqli_query($conn, $sql)) {
	header('Location: afteradmlogin.php?Message=' . urlencode("Novo Administrador Adicionado!"));
}
?>