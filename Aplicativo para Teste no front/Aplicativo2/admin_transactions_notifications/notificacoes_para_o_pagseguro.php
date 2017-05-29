<?php
if(isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction'){

    $email = 'ruonlineunb@gmail.com';
    $token = '53C97A1C23DD48BB82DD3B1A85C585A4';

    		$url = 'https://ws.pagseguro.uol.com.br/v2/transactions/notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;

				    $curl = curl_init($url);
				    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
				    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				    $transaction= curl_exec($curl);
				    curl_close($curl);

									    if($transaction == 'Unauthorized'){
									        
									        echo 'Você não tem permissão para continuar';

									        exit;
}
   											

   											 $transaction = simplexml_load_string($transaction);
}


?>

 