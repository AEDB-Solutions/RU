<?php
require_once "PagSeguroLibrary/PagSeguroLibrary.php";
class ConnectToPagseguro{
    private $email = "ruonlineunb@gmail.com";
    private $token = "A173387059844BB78C15679EBAB67B84";
	function connectDate($initialDate, $finalDate){
		$pageNumber = 1;
        $maxPageResults = 20;
        try {
            //credenciais pegas por uma função ja existente na pagsegurolibrary.php
            $credentials = new PagSeguroAccountCredentials($this->email, $this->token);
            $result = PagSeguroTransactionSearchService::searchByDate(
                $credentials,
                $pageNumber,
                $maxPageResults,
                $initialDate,
                $finalDate
            );
            return $result;
        } catch (PagSeguroServiceException $e) {
            die($e->getMessage());
        }
    }
    function connectCode($transactionCode){
        try {
            //credenciais pegas por uma função ja existente na pagsegurolibrary.php
            $credentials = new PagSeguroAccountCredentials($this->email, $this->token);
            $result = PagSeguroTransactionSearchService::searchByCode(
                $credentials,
                $transactionCode
            );
            return $result;
        } catch (PagSeguroServiceException $e) {
            die($e->getMessage());
        }
    }

}