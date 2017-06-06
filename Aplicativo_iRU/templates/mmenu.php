<ion-view title="Menu" id="page11" style="">
  <ion-content padding="true" class="has-header">
  	<!--<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- Linhas adicionadas do pagseguro.html-->
	<!--<input type="hidden" name="itemCode" value="9F9FA85EFCFCF34EE478BF8DB1612947" />
	<input type="hidden" name="iot" value="button" />-->
	<button  ui-sref="dados" id="menu-button8" class="button button-positive  button-block">Comprar Refeições</button>
	<!--</form>
	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>-->
<!--- ................................... -->
  <!--  <button ui-sref="extrato" id="menu-button9" class="button button-positive  button-block" ng-click='extrato()'>Checagem de extrato</button> -->
    <button id="menu-button9" class="button button-positive  button-block" ng-click='extrato()'>Checagem de extrato</button>
    <b id="signup-button15" class="button button-stable button-block">Verificar Lotação</b>
  </ion-content>
</ion-view>
