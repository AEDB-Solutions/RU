<?php
include("Locais.class.php");
/*github.com/thefonseca/jogo-politico*/
include("connectDB.php");
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;
$locais = array();
$sql = "SELECT * FROM Locais";
$result = mysqli_query($conn, $sql);
$key = "AIzaSyDoYLvz6aAfj47gppmcv5TF-NICUjp-8E8";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$object = new Locais($row["Local"], $row["Latitude"], $row["Longitude"]);
	array_push($locais, $object);
}
$number = count($locais);
for($i = 0; $i < $number; $i++){
	$obj = array_shift($locais);
	$origins = $obj->getLatitude() . ",". $obj->getLongitude();
	echo "Origem: " . $origins . "<br>";
	for($j = 0; $j < count($locais); $j++){
		$destination = $locais[$j]->getLatitude() . "," . $locais[$j]->getLongitude();
		$myURL = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&mode=walking&";
		$myURL .= "origins=" . $origins;
		$myURL .= "&destinations=" . $destination;
		$myURL .= "&key=" . $key;
		echo $myURL . "<br><br>";
		$json = json_decode(file_get_contents($myURL), true);
		$distance = $json['rows'][0]['elements'][0]['distance']['text'];
		$time = $json['rows'][0]['elements'][0]['duration']['text'];
		$times = strtok($time, 'mins');
		$distances  = strtok($distance, 'km');
		echo $times . "<br>";
		echo $distances . "<br>";
		$nomeOrigem = $obj->getNome();
		$nomeDestino = $locais[$j]->getNome();
		$sql = "INSERT INTO Distancias (Origem, Destino, Distancia, Tempo) VALUES ('$nomeOrigem', '$nomeDestino', '$distances', '$times')";
		mysqli_query($conn, $sql);
		$sql = "INSERT INTO Distancias (Origem, Destino, Distancia, Tempo) VALUES '$nomeDestino','$nomeOrigem', '$distances', '$times'";
		mysqli_query($conn, $sql);
		//echo str_repeat('&nbsp;', 10) . "destino: " . $destination . "<br>";
	}
}
	echo json_encode($locais);
//	$myURL = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&";
	//origins=Washington,DC&destinations=New+York+City,NY&key=YOUR_API_KEY";
	//$myURL .= $origins->getLatitude();

	$myURL .= "origins=" . $origins->getLatitude() . "|" . $origins->getLongitude();
	//echo $myURL;
	//var_dump($locais[1]);
	$key;
	$object = json_decode("php://input");