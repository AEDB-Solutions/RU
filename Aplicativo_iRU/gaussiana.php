<?php 
	/*
	y(t) = e^(-(t-12.5)^2)*/
	/*$t = 12.5;
	$desvioPadrao = 0.5;
	$expoente = pow(($t - 12.5), 2);
	$expoente /= $desvioPadrao;
	//echo $expoente;
	$tempoMaximoNaFila = 40;
	echo $tempoMaximoNaFila*pow(M_E, -$expoente);
	*/
class Gaussiana {
	
	public function getTimeInQueue($time){
		/*fazer possiveis tratamentos de tempo*/
	$desvioPadrao = 0.5;
	$tempoDePico = 12.5;
	$desvioPadrao = 0.5;
	$expoente = pow(($time - $tempoDePico), 2);
	$expoente /= $desvioPadrao;
	$tempoMaximoNaFila = 40;
	$tempoNaFila = $tempoMaximoNaFila*pow(M_E, -$expoente);
		return $tempoNaFila;
	}
}