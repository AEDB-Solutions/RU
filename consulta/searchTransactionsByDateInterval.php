<html>

<html>

 <head>

   <meta http-equiv="Content-Type" 

content="text/html; charset=utf-8" />
   
   <title>Transações</title>
 
   </head>
 
   <body>
   
   <form action="lol.php" method="post">
<?php

 require_once "PagSeguroLibrary/PagSeguroLibrary.php";
 //requisição da biblioteca pagseguro.

class SearchTransactionsByDateInterval
{

    public static function main()
    {
        // as datas inicial e final são passadas do arquivo index.php via post para este php principal
        $initialDate = $_POST['initialdate'];
        $finalDate = $_POST['finaldate'];
        // esses numeros de paginas pode ser alterado ate um máximo de 100 páginas, o pageNumber está sempre setado para 1
        $pageNumber = 1;
        $maxPageResults = 20;

        try {
            //credenciais pegas por uma função ja existente na pagsegurolibrary.php
            $credentials = new PagSeguroAccountCredentials("ruonlineunb@gmail.com", "2074A2AE86E64809AC7F8CF009DD7EDF");
            

            $result = PagSeguroTransactionSearchService::searchByDate(
                $credentials,
                $pageNumber,
                $maxPageResults,
                $initialDate,
                $finalDate
            );

            self::printResult($result, $initialDate, $finalDate);

        } catch (PagSeguroServiceException $e) {
            die($e->getMessage());
        }

    }

    public static function printResult(PagSeguroTransactionSearchResult $result, $initialDate, $finalDate)
    {
        $finalDate = $finalDate ? $finalDate : 'now';
        echo "<h2>Consulta de Transações por Data</h2>";
        echo "<h3>$initialDate até $finalDate</h3>";
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

SearchTransactionsByDateInterval::main();
?>
</form>
 
 </body>
 
 </html>