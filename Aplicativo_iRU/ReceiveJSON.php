<?php
class JSON_receive(){

// Handling data in JSON format on the server-side using PHP
//

	function Receive($input){

		//header("Content-Type: application/json");
	//	header("Location: http://localhost/iRU/#/page1");
		// build a PHP variable from JSON sent using POST method
		//$v = json_decode(stripslashes(file_get_contents("php://input")));
		$v = json_decode(stripslashes(file_get_contents($input)));
		// build a PHP variable from JSON sent using GET method
		$v = json_decode(stripslashes($_GET["data"]));
		// encode the PHP variable to JSON and send it back on client-side
		echo json_encode($v);
	}
}
?>
