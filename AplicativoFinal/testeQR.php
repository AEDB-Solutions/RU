<?php
require("phpqrcode/qrlib.php");
$meuObjeto = json_decode(file_get_contents("php://input"));
getImage($meuObjeto->Matricula);
echo removeSlash($meuObjeto->Matricula);
function getImage($matricula){
	$matricula = removeSlash($matricula);
	QRCode::png($matricula, 'img_qrcodes/' . $matricula.'.png', QR_ECLEVEL_H, 4);
}


function addSlash($matricula){
	$newstr = substr_replace($matricula, "/", 2, 0);
	return $newstr;
}
function removeSlash($matricula){
	$newstr = str_replace("/", "", $matricula);
	return $newstr;
}