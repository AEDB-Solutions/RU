<html>

<html>

 <head>

   <meta http-equiv="Content-Type" 

content="text/html; charset=utf-8" />
   
   <title>QrCode</title>
 
   </head>
 
   <body>
   
   <form action="lol.php" method="post">
<?php

//biblioteca
require("/phpqrcode/qrlib.php");

//Montando os dados para o QR Code
$cv  = $_POST['matricula'];

//Gerando a imagem com a classe QRcode
QRCode::png($cv, 'img_php/' .$cv.'.png', QR_ECLEVEL_H, 4);
 
//Mostrando a imagem gerada.
echo '<img src="img_php/' .$cv.'.png" />';
 
?>
</form>
 
 </body>
 
 </html>
