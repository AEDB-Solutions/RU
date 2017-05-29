

<?php


/* 

Dados Equipe iRU:

MerchantId:
a744aaeb-ba87-4073-8792-3c4c75b02f95
MerchantKey:
OADAMUZAMSZADKAWWNXZHHKZTXLLHEFHEERPUWJL
*/

			curl_setopt($curl, CURLOPT_HTTPHEADER, array('MerchantId: a744aaeb-ba87-4073-8792-3c4c75b02f95'));
			/* Autenticação da Loja*/
			/* MerchantId é o identificador único da loja fornecido pela Cielo após a afiliação da loja*/

					<?php


   /*Chamar a função e colocar os parâmetros nas strings exemplo*/
					/* Requisição */
						$order = new stdClass();
						$order->OrderNumber = '1234';
						$order->SoftDescriptor = 'Nome que aparecerá na fatura';
						$order->Cart = new stdClass();
						$order->Cart->Discount = new stdClass();
						$order->Cart->Discount->Type = 'Percent';
						$order->Cart->Discount->Value = 10;
						$order->Cart->Items = array();
						$order->Cart->Items[0] = new stdClass();
						$order->Cart->Items[0]->Name = 'Nome do produto';
						$order->Cart->Items[0]->Description = 'Descrição do produto';
						$order->Cart->Items[0]->UnitPrice = 100;
						$order->Cart->Items[0]->Quantity = 2;
						$order->Cart->Items[0]->Type = 'Asset';
						$order->Cart->Items[0]->Sku = 'Sku do item no carrinho';
						$order->Cart->Items[0]->Weight = 200;
						$order->Shipping = new stdClass();
						$order->Shipping->Type = 'Correios';
						$order->Shipping->SourceZipCode = '14400000';
						$order->Shipping->TargetZipCode = '11000000';
						$order->Shipping->Address = new stdClass();
						$order->Shipping->Address->Street = 'Endereço de entrega';
						$order->Shipping->Address->Number = '123';
						$order->Shipping->Address->Complement = '';
						$order->Shipping->Address->District = 'Bairro da entrega';
						$order->Shipping->Address->City = 'Cidade da entrega';
						$order->Shipping->Address->State = 'SP';
						$order->Shipping->Services = array();
						$order->Shipping->Services[0] = new stdClass();
						$order->Shipping->Services[0]->Name = 'Serviço de frete';
						$order->Shipping->Services[0]->Price = 123;
						$order->Shipping->Services[0]->DeadLine = 15;
						$order->Payment = new stdClass();
						$order->Payment->BoletoDiscount = 0;
						$order->Payment->DebitDiscount = 10;
						$order->Customer = new stdClass();
						$order->Customer->Identity = 11111111111;
						$order->Customer->FullName = 'Fulano Comprador da Silva'; 
						$order->Customer->Email = 'fulano@email.com';
						$order->Customer->Phone = '11999999999';
						$order->Options = new stdClass();
						$order->Options->AntifraudEnabled = false;

					

						$curl = curl_init();

								curl_setopt($curl, CURLOPT_URL, 'https://cieloecommerce.cielo.com.br/api/public/v1/orders');
								curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
								curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($curl, CURLOPT_POST, true);
								curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($order));
								curl_setopt($curl, CURLOPT_HTTPHEADER, array(
								    'MerchantId: a744aaeb-ba87-4073-8792-3c4c75b02f95',
								    'Content-Type: application/json'
								));


								/*Resposta*/

								$response = curl_exec($curl);

								curl_close($curl);

								$json = json_decode($response);


							?>

