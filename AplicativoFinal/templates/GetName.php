<?php
include("connectDB.php");
$meuobjeto = json_decode(file_get_contents('php://input'));
getName($meuobjeto->Matricula);

function getName($matricula){
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;

	$sql = "SELECT Username FROM Users WHERE Matricula = '$matricula'";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
	echo $row["Username"];
}