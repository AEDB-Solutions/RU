<ion-view title="Menu" id="page11" style="">
<ion-content class="has-header" padding="true" style="background: url(img/MeUjzLDyQPSHZmVDWmyb_background20sem20logo.png) no-repeat center;background-size:cover;">
  	<!--<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- Linhas adicionadas do pagseguro.html-->
	<!--<input type="hidden" name="itemCode" value="9F9FA85EFCFCF34EE478BF8DB1612947" />
	<input type="hidden" name="iot" value="button" />-->
   <div class="spacer" style="width: 290px; height: 10px;"></div>
   <ion-card>
  <ion-card-header>
    Olá  {{myName}} 
  </ion-card-header>
  <ion-card-content>
    seu saldo atual é de: {{mySaldo}} 
  </ion-card-content>
</ion-card>
    <div class="spacer" style="width: 290px; height: 10px;"></div>
	<button  ui-sref="dados" id="menu-button8" class="button button button-block">Comprar Refeições</button>
  <div class="spacer" style="width: 290px; height: 10px;"></div>
	<!--</form>
	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>-->
<!--- ................................... -->
  <!--  <button ui-sref="extrato" id="menu-button9" class="button button-positive  button-block" ng-click='extrato()'>Checagem de extrato</button> -->
    <button ui-sref="extrato" id="menu-button9" class="button button  button-block" ng-click='extrato()'>Checagem de extrato</button>
    <div class="spacer" style="width: 290px; height: 10px;"></div>
    <button ui-sref="presente" id="menu-button7" class="button button button-block">Presentear um amigo</button>
    <div class="spacer" style="width: 290px; height: 10px;"></div>
    <button ui-sref="capacidade" id="signup-button15" class="button button button-block">Verificar Lotação</button>
    <div class="spacer" style="width: 290px; height: 10px;"></div>
    <button ui-sref="parmaps" id="signup-button15" class="button button button-block">Mapa</button>
    <div class="spacer" style="width: 290px; height: 10px;"></div>
    <button ui-sref="QRCode" id="signup-button15" class="button button button-block">Entrar por QR code</button>
  </ion-content>
</ion-view>
