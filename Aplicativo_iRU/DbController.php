<?php
include ('connectDB.php');
include ('OperationController.php');
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
    //self::addDataToOurDB();
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT Data, Valor FROM Compras WHERE Matricula = '$matricula'";
    $final=array();
    $send = array();
    if($result = mysqli_query($conn,$sql)) {
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $send["data"] = $row["Data"];
            $send["valor"] = $row["Valor"];
            array_push($final,$send);
          }
        $sql = "SELECT Data, valor FROM Presentes WHERE Remetente = '$matricula'";
        if($result = mysqli_query($conn, $sql)){
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $send["data"] = $row["Data"];
            $send["valor"] = -$row["valor"];
            array_push($final,$send);
          }
        }
        $sql = "SELECT Data, valor FROM Presentes WHERE Destinatario = '$matricula'";
        if($result = mysqli_query($conn, $sql)){
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $send["data"] = $row["Data"];
            $send["valor"] = $row["valor"];
            array_push($final,$send);
          }
        }
        $sql = "SELECT * FROM Entrada WHERE Matricula = '$matricula'";
        if($result = mysqli_query($conn, $sql)){
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $send["data"] = $row["Data"];
            $send["valor"] =  -2.5;
            array_push($final,$send);
          }
        }
        echo json_encode($final);
      }
      else {
         echo false;
      }
  }
  function checkTransactionHistory(){
    //this->addDataToOurDB();
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
function saldo($matricula){
  $sum;
  $myConnect = new ConnectDB();
  $myConnect->Connect();
  $conn = $myConnect->conn;
  $sql = "SELECT sum(Valor) FROM Compras WHERE Matricula = '$matricula'";
  $rs = mysqli_query($conn, $sql);
  if(FALSE == $rs) die("Select sum failed: ".mysqli_error);
  $row = mysqli_fetch_row($rs);
  $sum = $row[0];
  $sql = "SELECT sum(valor) FROM Presentes WHERE Destinatario = '$matricula'";
  $rs = mysqli_query($conn, $sql);
  if(FALSE == $rs) die("Select sum failed: ".mysqli_error);
  $row = mysqli_fetch_row($rs);
  $sum += $row[0];
  $sql = "SELECT sum(valor) FROM Presentes WHERE Remetente = '$matricula'";
  $rs = mysqli_query($conn, $sql);
  if(FALSE == $rs) die("Select sum failed: ".mysqli_error);
  $row = mysqli_fetch_row($rs);
  $sum -= $row[0];
  return $sum;
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
  function checkCrowd(){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT ID, Matricula, Horario, Refeitorio FROM Entradas";
    $result = mysql_query($sql, $conecta);
    //INICIANDO CONTADOR
    $count1 = 0; 
    $count2 = 0; 
    $count3 = 0; 
    $count4 = 0; 
    $count5 = 0; 
    $count6 = 0;
    date_default_timezone_set("Brazil/East");
    while($consulta = mysql_fetch_array($result)) { 
      $vetor = array(); //VETOR PARA TODOS OS CAMPOS DO BANCO DE DADOS
      $blz = array(); // VETOR SOMENTE PARA CAMPOS QUE SATISFAÇAM AS CONDIÇÕES NO FINAL DO WHILE
      $vetor[] = "$consulta[Horario]"; 
      $refeitorio = array();
      $refeitorio[] = "$consulta[Refeitorio]";
      //print_r ($vetor);
      $pos = $vetor[0];
      $pos1 = $refeitorio[0];
      $date1 = new DateTime();
      $date2 = new Datetime($pos);
      $intervalo = $date1->diff($date2);
      $days_interval = $intervalo->format("%a");
      $hours = $intervalo->format("%H");
      $minutes = $intervalo->format("%I");
      if($days_interval == 0){
        if($hours == 00){
          if($minutes < 20){ //SUPONDO, POR EXEMPLO, QUE A MÉDIA É 20 MINUTOS
            if($pos1 == 1){
            $blz[] = $pos;
            $count1 = $count1 + 1;
            
            }
            elseif($pos1 == 2){
            $blz[] = $pos;
            $count2 = $count2 + 1;
            
            }
            elseif($pos1 == 3){
            $blz[] = $pos;
            $count3 = $count3 + 1;
            
            }
            elseif($pos1 == 4){
            $blz[] = $pos;
            $count4 = $count4 + 1;
            
            }
            elseif($pos1 == 5){
            $blz[] = $pos;
            $count5 = $count5 + 1;
            
            }
            elseif($pos1 == 6){
            $blz[] = $pos;
            $count6 = $count6 + 1;
            
            }
            
          }
        }
      }
    }
    $contadores = array();
    array_push($contadores, $count1);
    array_push($contadores, $count2);
    array_push($contadores, $count3);
    array_push($contadores, $count4);
    array_push($contadores, $count5);
    array_push($contadores, $count6);
    
    echo json_encode($contadores);
    }
    
  function newPassword($matricula, $newpassword){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $criptografia = hash('sha256', $newpassword);
    $sql = "UPDATE Users SET Password = '$criptografia' WHERE Matricula = '$matricula'";
    if(mysqli_query($conn, $sql)){
      echo true;
    }
    else echo false;
  }
  function retrievePassword($email, $cpf){
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $sql = "SELECT ID FROM Users WHERE CPF = '$cpf' and Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count ==1) {
      echo true;
    }
    else echo false;
  
  }  
  function gift($matriculaSender, $matriculaReceiver,  $qtdref, $senhaSender){
    /*CONSERTAR*/
    /*Checar se a matricula e a senha de usuario batem
    Checar se o emissor tem saldo disponivel para passar (>qtdref)
    Caso ambas forem verdades, realizar a troca no banco de dados.*/
    $myConnect = new ConnectDB();
    $myConnect->Connect();
    $conn = $myConnect->conn;
    $valor = $qtdref*2.5;
    $criptografia = hash('sha256', $senhaSender);
    $sql = "SELECT ID FROM Users WHERE Matricula = '$matriculaSender' and Password = '$criptografia'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){    
     $sum = $this->saldo($matriculaSender);
      if($sum < $valor){
        echo "false";
        die();
      }
      else {
        $sql = "INSERT INTO Presentes (Remetente, Destinatario, valor) VALUES ('$matriculaSender', '$matriculaReceiver', '$valor')";
        if(mysqli_query($conn, $sql)){
            echo true;
        }
      }
    }
    else {
      die("matricula e senha diferem!");
    }
  }
}