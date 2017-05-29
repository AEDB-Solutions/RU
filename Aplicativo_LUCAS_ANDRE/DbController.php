<?php
include ('connectDB.php');
include ('OperationController.php');
include ('Transacao.class.php');
require_once "PagSeguroLibrary/PagSeguroLibrary.php";
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
  function addDataToOurDB(PagSeguroTransactionSearchResult $result, $initialDate, $finalDate){
    //define a timezone brasileira, para poder usar a função date
    date_default_timezone_set("Brazil/East");
    //procura em um espaço de 30 dias da ultima data (limitação do proprio pagseguro)
    $d = strtotime("-30 days");
    $finalDate = date("Y-m-d") ."T". date("H:i:s");
    $initialDate = date("Y-m-d", $d) . "T" . date("H:i:s");

    //conecta ao banco de dados
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;

    //cria um objeto que se conecta ao pagseguro
    $pagseguro = new ConnectToPagseguro();
    //procura as transações, filtrando por data.
    $transactions = $pagseguro->connectDate($initialDate, $finalDate)->getTransactions();
    if (is_array($transactions) && count($transactions) > 0) {
      //para cada transação, ele da os dados de codigo, valor, data e referencia.
        foreach ($transactions as $key => $transactionSummary) {
          //pega o codigo da transação
          $code = $transactionSummary->getCode();
          //pega as informações de comprador, procurando por codigo as informações
          $transactiondata = $pagseguro->connectCode($code);
          $valor = $transactionSummary->getGrossAmount();
          $mail = $transactiondata->getSender()->getEmail();
          echo $mail . "<br>";
          $datahorario = $transactiondata->getDate();
          $data = strtok($datahorario, 'T');
          $horario = strtok(".");

           /*
           Pegar dados matricula do usuario via email.
            Pegar informação de Codigo, montante, data e horario
            adicionar no banco de dados*/

            $sql = "INSERT INTO Compras (Codigo, Matricula, Email, Valor, Data, Horario) VALUES ('$code', (SELECT Matricula FROM Users WHERE Email = '$mail'), '$mail', '$valor', '$data', '$horario')";
            if(mysqli_query($conn, $sql)){
              echo "Dados adicionados com sucesso!";
            }
            else {
              echo "batata";
            }
        }
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
        $send = array();
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            array_push($send, new Transacao($row["Data"], $row["Valor"]));
          }
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
    $data = date("d/m/Y");
    //horario : date(h:i:sa);
    $sql = "SELECT Horario FROM Compras WHERE Data = '$data'";
    if($result = mysqli_query($conn, $sql)) {
      $horarios = array();
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        array_push($horarios, $row["Horario"]);
      }
    myOperation = new Operations();
    $pessoas = myOperation->estimatePeople();
    echo $pessoas;
    }
    else {
      echo false;
    }
  }



}