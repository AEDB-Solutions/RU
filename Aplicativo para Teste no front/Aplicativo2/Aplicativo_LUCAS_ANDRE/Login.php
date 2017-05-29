<?php
include ('DbController.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));

  $login = new Controller();
  $criptografia = hash('sha256',$meuobjeto->password);
//  $login->Check($meuobjeto->matricula, $criptografia);
  if($login->check($meuobjeto->matricula, $criptografia) == true)
  {
    echo true;
  }
  else
  {
    echo false;
  }
  //$result = $login->Check($meuobjeto->matricula, $meuobjeto->password);

  //echo json_encode($result);
?>
