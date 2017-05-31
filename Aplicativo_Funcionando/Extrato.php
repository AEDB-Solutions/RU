<?php
include ('DbController.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));

  $extrato = new Controller();
  $matricula = "150055053";
  $extrato->checkExtract($meuobjeto->matricula);
	//$extrato->checkExtract($matricula);