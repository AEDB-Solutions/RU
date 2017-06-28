<?php
$matricula = $_GET["matricula"];
$matricula = addSlash($matricula);
$refeitorio = 6;
include('connectDB.php');
$sql = "INSERT INTO Entradas (Matricula, Refeitorio) VALUES ('$matricula', '$refeitorio')";
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;
if(mysqli_query($conn, $sql)) {
	header('Location: afteradmlogin.php?Message=' . urlencode("Entrada com sucesso!"));
}
function addSlash($matricula){
	$newstr = substr_replace($matricula, "/", 2, 0);
	return $newstr;
}
?>
