<?php
require_once "PagSeguroLibrary/PagSeguroLibrary.php";
class ConnectToPagseguro{
	public $result;
	$d = strtotime("-6 Months");
  	$finalDate = date("Y-m-d") ."T". date("H:i:s");
    $initialDate = date("Y-m-d", $d) . "T" . date("H:i:s");
	function connectDate(){
		$pageNumber = 1;
        $maxPageResults = 20;
        try {
            //credenciais pegas por uma função ja existente na pagsegurolibrary.php
            $credentials = new PagSeguroAccountCredentials("ruonlineunb@gmail.com", "E33D8CBC88EC4EF29CAE93DB68E8B040");
            $this->result = PagSeguroTransactionSearchService::searchByDate(
                $credentials,
                $pageNumber,
                $maxPageResults,
                $initialDate,
                $finalDate
            );
        } catch (PagSeguroServiceException $e) {
            die($e->getMessage());
        }
    }
}