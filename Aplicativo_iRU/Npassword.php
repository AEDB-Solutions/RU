<?php
include("DbController.php");
$meuobjeto = json_decode(file_get_contents('php://input'));
$checkForgot = new Controller();
$checkForgot->newPassword($meuobjeto->matricula, $meuobjeto->password);
