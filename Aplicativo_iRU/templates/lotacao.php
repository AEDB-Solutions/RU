<?php 
//DB CONNECT
$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
mysql_select_db("Test", $conecta) or print(mysql_error()); 
$sql = "SELECT ID, Matricula, Horario FROM Entradas";
$result = mysql_query($sql, $conecta);
//INICIANDO CONTADOR
$count = 0;

while($consulta = mysql_fetch_array($result)) { 
	$vetor = array(); //VETOR PARA TODOS OS CAMPOS DO BANCO DE DADOS
	$blz = array(); // VETOR SOMENTE PARA CAMPOS QUE SATISFAÇAM AS CONDIÇÕES NO FINAL DO WHILE
	$vetor[] = "$consulta[Horario]"; 
	//print_r ($vetor);
	$pos = $vetor[0];
	$date1 = new DateTime();
	$date2 = new Datetime($pos);

	$intervalo = $date1->diff($date2);

	$days_interval = $intervalo->format("%a");
	$hours = $intervalo->format("%H");
	$minutes = $intervalo->format("%I");

	if($days_interval == 0){
		if($hours == 05){
			if($minutes < 20){ //SUPONDO, POR EXEMPLO, QUE A MÉDIA É 20 MINUTOS
				$blz[] = $pos;
				$count = $count + 1;
			}
		}
	}
}
?>

<ion-view title="Lotação" id="page6" style="">
	 <ion-content padding="true" class="has-header">
		<?php	
			echo "Número de pessoas nos refeitórios do RU: $count";
		?>
	</ion-content>
</ion-view>

<?php		
mysql_free_result($result); 
mysql_close($conecta); 
?>




