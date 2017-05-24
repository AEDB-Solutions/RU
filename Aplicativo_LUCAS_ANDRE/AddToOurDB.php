<?php
require_once "PagSeguroLibrary/PagSeguroLibrary.php";
include ('connectDB.php');
class AddToOurDB
{
	$pagamento = new ConnectToPagseguro();
	$this.pagamento->connectDate();

	$d = strtotime("-6 Months");
	$finalDate = date("Y-m-d") ."T". date("H:i:s");
	$initialDate = date("Y-m-d", $d) . "T" . date("H:i:s");
    function atualizar(PagSeguroTransactionSearchResult $result, $initialDate, $finalDate)
    {
        $transactions = $result->getTransactions();
        if (is_array($transactions) && count($transactions) > 0) {
            foreach ($transactions as $key => $transactionSummary) {
                echo "Código: " . $transactionSummary->getCode() . "<br>";
                echo "Referência: " . $transactionSummary->getReference() . "<br>"; //referência não aparece pq nenhuma compra foi efetivada.
                echo "Montante: " . $transactionSummary->getGrossAmount() . "<br>";
                echo "Data: " . $transactionSummary->getDate() . "<br>";
                //echo "Status: " . $transactionSummary->getStatus() . "<br>";
                //o status da compra não está funcionando, e neste tipo de consulta o pagseguro não retorna o nome ou o email do comprador.
                echo "<hr>";
            }
        }
    }
}
?>