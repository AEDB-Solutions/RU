<?php
include('ConnectToPagseguro.php');
include('connectDB.php');
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
          $matricula = $transactionSummary->getReference();
          $mail = $transactiondata->getSender()->getEmail();
          echo $mail . "<br>";
          $datahorario = $transactiondata->getDate();
          $data = strtok($datahorario, 'T');
          $horario = strtok(".");
           /*
           Pegar dados matricula do usuario via referencia.
            Pegar informação de Codigo, montante, data e horario
            adicionar no banco de dados*/

            $sql = "INSERT INTO Compras (Codigo, Matricula, Email, Valor, Data, Horario) VALUES ('$code', '$matricula', '$mail', '$valor', '$data', '$horario')";
            if(mysqli_query($conn, $sql)){
              echo "Dados adicionados com sucesso!";
            }
            else {
              echo "batata";
            }
        }
    }
