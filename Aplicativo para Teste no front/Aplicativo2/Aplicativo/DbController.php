<?php
include ('connectDB.php');
include ('OperationController.php');
Class Controller {
	function check($matricula, $senha){
     $myConnect = new ConnectDB();
     $myConnect->Connect();
     $conn = $myConnect->conn;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $sql = "SELECT ID FROM Users WHERE Matricula = '$matricula' and Password = '$senha'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row["active"];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        session_start();
          $_SESSION['login_user'] = $matricula;
          return true;
      }
      else {
         return false;
      }
      //    return false;
   }
   }

   function registrar($username, $matricula, $email, $password, $CPF, $gender, $age, $curso){
		$myConnect = new ConnectDB();
		$myConnect->Connect();
		$conn = $myConnect->conn;
		$criptografia = hash('sha256',$password);
		//$criptografiaprabotapafuder = hash('sha256',$criptografia); Se quiser usar essa outra função,seria a criptografia da criptografia.
		$sql = "INSERT INTO Users (Username, Matricula, Email, Password, CPF, Gender, Age, Curso) VALUES ('$username', '$matricula', '$email', '$criptografia', '$CPF', '$gender', '$age', '$curso')";
		if(mysqli_query($conn, $sql)){
			echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}
  function checkUserCredit($matricula){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT SALDO FROM Users WHERE Matricula = '$matricula'";
      if($result = mysqli_query($conn,$sql)) {
          $row = mysqli_fetch_assoc($result);
          echo $row["SALDO"];
      }
      else {
         echo false;
      }
  }
  function checkExtract($matricula){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT Data, Valor FROM Compras WHERE Matricula = '$matricula'";
    if($result = mysqli_query($conn,$sql)) {
        $data = array();
        $valor = array();
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            array_push($data, $row["Data"]);
            array_push($valor, $row["Valor"]);
          }
        $send = array($data, $valor);
        echo json_encode($send);
      }
      else {
         echo false;
      }
  }
  function checkTransactionHistory(){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT ID, Data, Valor, Matricula, Horario FROM Compras";
    if($result = mysqli_query($conn, $sql)) {
      $dados = array();
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        array_push($dados, $row["ID"]);
        array_push($dados, $row["Data"]);
        array_push($dados, $row["Valor"]);
        array_push($dados, $row["Matricula"]);
      }
    echo json_encode($dados);
    }
    else {
      echo false;
    }
  }
  function getNumberOfPeople(){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $data = date("Y-m-d");
    //horario : date(h:i:s);
    $sql = "SELECT Horario FROM Compras WHERE Data = '$data'";
    if($result = mysqli_query($conn, $sql)) {
      $horarios = array();
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        array_push($horarios, $row["Horario"]);
      }
    $myOperation = new Operations();
    $pessoas = $myOperation->estimatePeople($horarios);
    echo $pessoas;
    }
    else {
      echo false;
    }
  }


}