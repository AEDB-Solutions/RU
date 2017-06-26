<?php
include("connectDB.php");
include("gaussiana.php");
$meuobjeto = json_decode(file_get_contents('php://input'));
$nodes = array($meuobjeto->Destino, $meuobjeto->Destino2, $meuobjeto->Destino3);
$root = $meuobjeto->Origem;
$tempoMax = $meuobjeto->Tempo;
$horaAtual = $meuobjeto->Horario;
//echo getTime($meuobjeto->partida, $meuobjeto->nodes, $meuobjeto->horaDePartida, $meuobjeto->tempoMax);
$order = getTime($root, $nodes, $horaAtual, $tempoMax);

echo createURL("FT", $order);
//print_r(getTime("FT", $nodes, 12, 15));


function getTime($root, $nodes, $horaAtual, $tempoMax){
	$gaus = new Gaussiana();
	//$horaAtual = 12;
	$hora = $horaAtual + getTimeFromPoint($root, "RU");
	$menorTempo = $gaus->getTimeInQueue($hora);
	$myarray = array();
	if($menorTempo < $tempoMax){
		return array_push($myarray, $root);
	}
	$myarray = array();
	$firstTerm = $nodes[0];
	$value = "";
	$iteration = 0;
	while($iteration < 10){
		$myarray = array();
		for($i = 0; $i < count($nodes); $i++){
			if($i == 0){
				$hora += getTimeFromPoint($root, $nodes[$i]);
				$go = $hora + getTimeFromPoint($nodes[$i], "RU");
				$tempo = $gaus->getTimeInQueue($go);
			//	echo "hora: " . $hora . "<br>";
		//		echo "go: " . $go . "<br>";
	//			echo "tempo: " . $tempo . "<br>";
				array_push($myarray, $nodes[$i]);
				if($tempo < $tempoMax){
					$min = ($hora - floor($hora))*60;
	//				echo "<br><br>" . $min . "<br><br>";
					//array_push($myarray, $tempo);
					return $myarray;
				}
				else if($tempo < $menorTempo){
					$menorTempo = $tempo;
				}
			}
			else {
				$hora += getTimeFromPoint($nodes[$i-1], $nodes[$i]);
				$go = $hora + getTimeFromPoint($nodes[$i], "RU");
				$tempo = $gaus->getTimeInQueue($go);
		//		echo "hora: " . $hora . "<br>";
		//		echo "go: " . $go . "<br>";
		//		echo "tempo: " . $tempo . "<br>";
				array_push($myarray, $nodes[$i]);
				if($tempo < $tempoMax){
					$min = ($hora - floor($hora))*60;
		//			echo "<br><br>" . $min . "<br><br>";
				//	array_push($myarray, $tempo);
					return $myarray;
				}
				else if($tempo < $menorTempo){
					$menorTempo = $tempo;
				}
			}
		}
		//array_push($nodes, array_shift($nodes));
		$nodes = shuffleArray($nodes);
		//$value = $nodes[0];
		$iteration++;
	}
	array_push($myarray, $menorTempo);
	return $myarray;
}

function createURL($root, $array){
	$myConnect = new ConnectDB();
	$myConnect->Connect();
	$conn = $myConnect->conn;
	$sql = "SELECT * FROM Locais WHERE Local = '$root'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$origin = "&origin=" . $row["Latitude"] . "," . $row["Longitude"];
	$url = "https://www.google.com/maps/embed/v1/directions?&key=AIzaSyCNzgbxhYdfFp2T-1V6x7tJ9-xMKvkQZ1s&units=metric&mode=walking" . $origin; 
	$ru = "RU";
	$sql = "SELECT * FROM Locais WHERE Local = '$ru'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$destination = "&destination=" . $row["Latitude"] . "," . $row["Longitude"];
	$url .= $destination;
	if(count($array) > 0){
		$waypoints = "&waypoints=";
		foreach ($array as $key => $value) {
			if($key > 0){
				$waypoints .= "|";
			}
			$sql = "SELECT * FROM Locais WHERE Local = '$value'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$waypoints .= $row["Latitude"] . "," . $row["Longitude"];
			
		}
		$url .= $waypoints;
	}
	echo $url;
}
function shuffleArray($array){
	for($i = 0; $i < count($array); $i++){
		$random = rand(0, $i);
		$aux = $array[$i];
		$array[$i] = $array[$random];
		$array[$random] = $aux;
	}
	return $array;
}

function getTimeFromPoint($ponto1, $ponto2){
	$myConnect = new ConnectDB();
	$myConnect->Connect();
	$conn = $myConnect->conn;
	$sql = "SELECT Tempo FROM Distancias WHERE Origem = '$ponto1' and Destino = '$ponto2'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if(!is_null($row["Tempo"])){
		return $row["Tempo"]/60;
	}
	else {
		$sql = "SELECT Tempo FROM Distancias WHERE Origem = '$ponto2' and Destino = '$ponto1'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row["Tempo"]/60;
	}
}