<?php 
//DB CONNECT
$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
mysql_select_db("Test", $conecta) or print(mysql_error()); 
$sql = "SELECT ID, Matricula, Horario, Refeitorio FROM Entradas";
$result = mysql_query($sql, $conecta);
//INICIANDO CONTADOR
$count1 = 0; 
$count2 = 0; 
$count3 = 0; 
$count4 = 0; 
$count5 = 0; 
$count6 = 0;
date_default_timezone_set("Brazil/East");
while($consulta = mysql_fetch_array($result)) { 
	$vetor = array(); //VETOR PARA TODOS OS CAMPOS DO BANCO DE DADOS
	$blz = array(); // VETOR SOMENTE PARA CAMPOS QUE SATISFAÇAM AS CONDIÇÕES NO FINAL DO WHILE
	$vetor[] = "$consulta[Horario]"; 
	$refeitorio = array();
	$refeitorio[] = "$consulta[Refeitorio]";
	//print_r ($vetor);
	$pos = $vetor[0];
	$pos1 = $refeitorio[0];
	$date1 = new DateTime();
	$date2 = new Datetime($pos);

	$intervalo = $date1->diff($date2);

	$days_interval = $intervalo->format("%a");
	$hours = $intervalo->format("%H");
	$minutes = $intervalo->format("%I");

	if($days_interval == 0){
		if($hours == 00){
			if($minutes < 20){ //SUPONDO, POR EXEMPLO, QUE A MÉDIA É 20 MINUTOS
				if($pos1 == 1){
				$blz[] = $pos;
				$count1 = $count1 + 1;
				
				}
				elseif($pos1 == 2){
				$blz[] = $pos;
				$count2 = $count2 + 1;
				
				}
				elseif($pos1 == 3){
				$blz[] = $pos;
				$count3 = $count3 + 1;
				
				}
				elseif($pos1 == 4){
				$blz[] = $pos;
				$count4 = $count4 + 1;
				
				}
				elseif($pos1 == 5){
				$blz[] = $pos;
				$count5 = $count5 + 1;
				
				}
				elseif($pos1 == 6){
				$blz[] = $pos;
				$count6 = $count6 + 1;
				
				}
				
			}
		}
	}
}
?>

<ion-view title="Lotação" id="page6" style="">
<ion-content class="has-header" padding="true" style="background: url(img/MeUjzLDyQPSHZmVDWmyb_background20sem20logo.png) no-repeat center;background-size:cover;">
		<?php	
			echo "Refeitório 1: $count1 <br>";
			echo "Refeitório 2: $count2 <br>";
			echo "Refeitório 3: $count3 <br>";
			echo "Refeitório 4: $count4 <br>";
			echo "Refeitório 5: $count5 <br>";
			echo "Refeitório 6: $count6 <br>";
		?>
	</ion-content>
</ion-view>

<?php		
mysql_free_result($result); 
mysql_close($conecta); 
?>




