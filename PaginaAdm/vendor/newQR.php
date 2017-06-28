
<?php
require("autoload.php");
$QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
$qrcode_text = $QRCodeReader->decode(base64_encode("hue"));
echo $qrcode_text;
?>