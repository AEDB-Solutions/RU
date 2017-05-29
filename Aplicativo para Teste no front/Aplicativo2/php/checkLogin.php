<?php
require 'connectDB.php';
$myConnect = new Connect();
$myConnect->connect();
$conn = $myConnect->conn;


class CheckLogin(){
	private $matricula;
	private $senha;
	void function CheckLogin($matricula, $senha){
		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form  
      $sql = "SELECT id FROM Usuarios WHERE matricula = '$matricula' and senha = '$senha'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         echo "Success!";
         session_register("$matricula");
         $_SESSION['login_user'] = $matricula;
         
         header("location: localhost/Testinhos/dump.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
	}

}