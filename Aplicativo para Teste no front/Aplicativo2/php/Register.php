<?php
require 'connectDB.php';
myConnect = new Connect();
myConnect->connect();
$conn = myConnect->conn;
class Register(){
	function Register($matricula, $nome, $email, $senha){
		$sql = "INSERT INTO Usuarios (nome, matricula, senha) VALUES ('$nome', '$matricula', '$senha')";
		if(mysqli_query($conn, $sql)){
			echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}
}