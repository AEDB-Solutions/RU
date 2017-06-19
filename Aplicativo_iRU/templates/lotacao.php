<?php 
//DB CONNECT
$conecta = mysqli_connect("localhost", "root", "", "Test") or print (mysqli_error());
//var_dump(mysqli_select_db("Test", $conecta)); exit;
//mysqli_select_db("Test", $conecta) or print(mysqli_error()); 
$sql = "SELECT ID, Matricula, Horario, Refeitorio FROM Entradas";
$result = mysqli_query($conecta, $sql);
//var_dump($result); exit;
//INICIANDO CONTADOR
$count1 = 0; 
$count2 = 0; 
$count3 = 0; 
$count4 = 0; 
$count5 = 0; 
$count6 = 0;
date_default_timezone_set("Brazil/East");
while($consulta = mysqli_fetch_array($result)) { 
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

echo json_encode(array());
?>

<ion-view title="Lotação" id="page6" style="">
<ion-content class="has-header" padding="true" style="background: url(img/MeUjzLDyQPSHZmVDWmyb_background20sem20logo.png) no-repeat center;background-size:cover;">
  <form id="contact-form" class="list">
  <form name="contact-form" id="dados-form" class="list">
  	<ion-list id="dados-list">
    <div class="spacer" style="width: 290px; height: 80px;"></div>
  	<label class="item item-output">
        <span class="output-label">Refeitorio 1:</span>
        <output type="text">
        <?php
        	echo "$count1 <br>";
        ?>
    </label>
        <div class="spacer" style="width: 290px; height: 20px;"></div>
    <label class="item item-output">
        <span class="output-label">Refeitorio 2:</span>
        <output type="text">
        <?php
        	echo "$count2 <br>";
        ?>
    </label>
        <div class="spacer" style="width: 290px; height: 20px;"></div>
    <label class="item item-output">
        <span class="output-label">Refeitorio 3:</span>
        <output type="text">
        <?php
        	echo "$count3 <br>";
        ?>
    </label>
        <div class="spacer" style="width: 290px; height: 20px;"></div>
    <label class="item item-output">
        <span class="output-label">Refeitorio 4:</span>
        <output type="text">
        <?php
        	echo "$count4 <br>";
        ?>
    </label>
    <div class="spacer" style="width: 290px; height: 20px;"></div>
    <label class="item item-output">
        <span class="output-label">Refeitorio 5:</span>
        <output type="text">
        <?php
        	echo "$count5 <br>";
        ?>
    </label>
    <div class="spacer" style="width: 290px; height: 20px;"></div>
    <label class="item item-output">
        <span class="output-label">Refeitorio 6:</span>
        <output type="text">
        <?php
        	echo "$count6 <br>";
        ?>
    </label>
    <div class="spacer" style="width: 290px; height: 40px;"></div>
	</ion-content>
</ion-view>

<?php		
//mysqli_free_result($result); 
//mysqli_close($conecta); 
?>




