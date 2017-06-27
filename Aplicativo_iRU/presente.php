<?php
include("DbController.php");
$meuobjeto = json_decode(file_get_contents('php://input'));

$presentear = new Controller();
$presentear->gift($meuobjeto->matricula, $meuobjeto->matriculagift, $meuobjeto->refeicoes, $meuobjeto->password);