<?php
include ('checkLogin.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));
  $login = new CheckLogin();
  $criptografia = hash('sha256',$meuobjeto->password);
  if($login->Check($meuobjeto->matricula, $criptografia) == true)
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
