<?php
include ('DbController.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));

  $extrato = new Controller();
 // $matricula = "14/0150498";
  $extrato->checkExtract($_SESSION['login_user']);
