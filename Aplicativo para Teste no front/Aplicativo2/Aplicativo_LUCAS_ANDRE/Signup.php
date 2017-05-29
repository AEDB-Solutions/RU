<?php
  include("DbController.php");

  $meuobjeto = json_decode(file_get_contents('php://input'));

  $myRegister = new Controller();
  $myRegister->registrar($meuobjeto->username, $meuobjeto->matricula, $meuobjeto->email, $meuobjeto->password, $meuobjeto->CPF, $meuobjeto->gender, $meuobjeto->age, $meuobjeto->curso);
?>
