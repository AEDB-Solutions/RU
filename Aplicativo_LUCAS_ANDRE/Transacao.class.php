<?php
Class Transacao{
	public $data;
	public $valor;

   function __construct($data, $valor) {
       $this->data = $data;
       $this->valor = $valor;
   }

}