<?PHP 


	$conexao = mysqli_connect("localhost","root","", "Test");



		$sql = "SELECT sum(saldo) AS total FROM saldo";
    	$rs = mysqli_query($conexao, 'SELECT sum(saldo) AS total FROM saldo');
      if(FALSE == $rs) die("Select sum failed: ".mysqli_error);
      $row = mysqli_fetch_row($rs);
      $sum= $row[0];
      print "Seu saldo total: R$: $sum";
   

   		mysqli_close($conexao);
	
?>

