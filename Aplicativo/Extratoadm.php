<?php
include ('DbController.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));

  $extratoAdm = new Controller();
 // $extratoAdm->checkTransactionHistory();
    $extratoAdm->getNumberOfPeople();