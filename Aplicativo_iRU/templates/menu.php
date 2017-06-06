<?php
    session_start();

    private $servername = "localhost";
    private $username = "root";
    private $passcode = "";
    public $dbname = "Test";
    public $conn;
    // Create connection
    public function Connect(){
      $this->conn = mysqli_connect($this->servername, $this->username, $this->passcode, $this->dbname);
      mysqli_set_charset($this ->conn, 'utf8');
      // Check connection
      if (!$this->conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
        //session_start();
  }

    $matricula = $_SESSION['matricula'];

?>
<ion-view title="Menu" id="page11" style="">
  <ion-content padding="true" class="has-header">
  	<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- Linhas adicionadas do pagseguro.html-->
	<input type="hidden" name="itemCode" value="9F9FA85EFCFCF34EE478BF8DB1612947" />
	<input type="hidden" name="iot" value="button" />
	<button id="menu-button8" class="button button-positive  button-block">Comprar Refeições</button>
  <button id="menu-button8" class="button button-positive  button-block">Comprar Refeições</button>
	</form>
	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!--- ................................... -->
    <button id="menu-button9" class="button button-positive  button-block" ng-click='extrato()' >Checagem de extrato</button>
    <button id="menu-button14" class="button button-positive  button-block">Rumor UnB - Cardápio da semana</button>
  </ion-content>
</ion-view>
