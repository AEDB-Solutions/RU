<?php
require("phpqrcode/qrlib.php");
//$meuObjeto = json_decode(file_get_contents("php://input"));
//echo getImage($meuObjeto->matricula);]
echo getImage("14/0150498");

function getImage($matricula){
$matricula = removeSlash($matricula);
QRCode::png($matricula, 'img_qrcodes/' . $matricula.'.png', QR_ECLEVEL_H, 4);
//Mostrando a imagem gerada.
return '<img src="img_qrcodes/' . $matricula .'.png" />';
}


function addSlash($matricula){
	$newstr = substr_replace($matricula, "/", 2, 0);
	return $newstr;
}
function removeSlash($matricula){
	$newstr = str_replace("/", "", $matricula);
	return $newstr;
}