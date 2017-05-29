<?php
class Operations {
	function estimatePeople($myArray){
		$pessoasNoRu = 0;
		foreach ($myArray as $value) {
			$horaTrasacao = strtotime($value);
			$horaAtual = strtotime(date("h:i:sa"));
			$minutos = round(abs($horaAtual - $horaTrasacao)/60, 2);
			 //fazer a condição certa
			//tempo da atual - tempo da compra < 15 min =>> count++
			if($minutos <= 15) {
				$pessoasNoRu++;
			}
		}
		return $pessoasNoRu;
	}
}