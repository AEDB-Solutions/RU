<?php


function curlExec($url, $post = NULL, array $header = array())

				{
				    $ch = curl_init($url);
				 

				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				 

				    if(count($header) > 0) {
				        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				    }
				 

				    if($post !== null) {
				        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				    }
				 
				 
				    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				 

				    $data = curl_exec($ch);
				 

				    curl_close($ch);
				 
				 
				    return $data;
				}


					$email = 'ruonlineunb@gmail.com';
					$token = '53C97A1C23DD48BB82DD3B1A85C585A4';
					$transaction = 'G88B885A-7C3F-436C-XX49-049D0F1A9DXX';

								$url = 'https://ws.pagseguro.uol.com.br/v2/transactions/' . $transaction . '?email=' . $email . '&token=' . $token;

								$transaction = curlExec($url);



												if($transaction == 'Unauthorized') {

												    echo 'Você não tem permissão para continuar';
												    exit;
												}

															$transaction = simplexml_load_string($transaction);

															if(count($transaction -> error) > 0) {
															   
															   var_dump($transaction);
															}
						


																echo $transaction -> sender -> email;

?>



