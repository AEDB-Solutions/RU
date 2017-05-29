<html>

<html>

 <head>

   <meta http-equiv="Content-Type" 

content="text/html; charset=utf-8" />
   
   <title>Transações</title>
 
   </head>
 
   <body>
   
   <form action="lol.php" method="post">
<?php

$token ='2074A2AE86E64809AC7F8CF009DD7EDF';
$email = 'ruonlineunb@gmail.com';


$url = 'https://ws.pagseguro.uol.com.br/v2/transactions/'.$_POST['notificationCode'].'?email=' . $email . '&token=' . $token;


$curl = curl_init($url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$xml= curl_exec($curl);

curl_close($curl);

$xml= simplexml_load_string($xml);
echo "<h2>Consulta de Transações por Código</h2>";
echo "Nome: " . $xml->sender->name . "<br>";
echo "Email: " . $xml->sender->email . "<br>";
echo "Telefone: " . $xml->sender->phone->number . "<br>";
echo "Data: " . $xml->date . "<br>";
echo "Código: " . $xml->code . "<br>";
echo "Referência: " . $xml->reference . "<br>"; //referência não aparece pq nenhuma compra foi efetivada.
echo "Montante: " . $xml->grossAmount . "<br>";
echo "País: " . $xml->shipping->address->country . "<br>";   
echo "Estado: " . $xml->shipping->address->state . "<br>"; 
echo "Cidade: " . $xml->shipping->address->city . "<br>";  
echo "Bairro: " . $xml->shipping->address->district . "<br>";
echo "CEP: " . $xml->shipping->address->postalCode . "<br>";  
echo "Endereço: " . $xml->shipping->address->street . "<br>";
echo "Número: " . $xml->shipping->address->number . "<br>";        
                //echo "Status: " . $transactionSummary->getStatus() . "<br>";

?>
</form>
 
 </body>
 
 </html>

 
