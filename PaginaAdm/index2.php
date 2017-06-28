<title>iRU QRCODES</title>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="extencoes/qrcode.js"></script>
<script type="text/javascript" src="extencoes/grid.js"></script>
<script type="text/javascript" src="extencoes/version.js"></script>
<script type="text/javascript" src="extencoes/detector.js"></script>
<script type="text/javascript" src="extencoes/formatinf.js"></script>
<script type="text/javascript" src="extencoes/errorlevel.js"></script>
<script type="text/javascript" src="extencoes/bitmat.js"></script>
<script type="text/javascript" src="extencoes/datablock.js"></script>
<script type="text/javascript" src="extencoes/bmparser.js"></script>
<script type="text/javascript" src="extencoes/datamask.js"></script>
<script type="text/javascript" src="extencoes/rsdecoder.js"></script>
<script type="text/javascript" src="extencoes/gf256poly.js"></script>
<script type="text/javascript" src="extencoes/gf256.js"></script>
<script type="text/javascript" src="extencoes/decoder.js"></script>
<script type="text/javascript" src="extencoes/qrcode.js"></script>
<script type="text/javascript" src="extencoes/findpat.js"></script>
<script type="text/javascript" src="extencoes/alignpat.js"></script>
<script type="text/javascript" src="extencoes/databr.js"></script>
<script type="text/javascript" src="extencoes/camcanvas.js"></script>
<script type="text/javascript" src="extencoes/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="extencoes/jquery.webcamqrcode.min.js"></script>
</head>

<script>
(function($){
	$('document').ready(function(){
		$('#qrcodebox').WebcamQRCode({
			onQRCodeDecode: function( p_data ){
					$('#qrcode_result').html( p_data );
			}
		});
		
		$('#btn_start').click(function(){
			$('#qrcodebox').WebcamQRCode().start();
		});
		
		$('#btn_stop').click(function(){
			$('#qrcodebox').WebcamQRCode().stop();
		});
	});
})(jQuery);
</script>

<script>
function apaga_campo(){
$('#imgs').remove();
}

$(document).ready( function() {
$('#input').change(function() {
    
    var fr = new FileReader;
    
    fr.onload = function() {
        var img = new Image;
        
        img.src = fr.result;

           $('<img style="border-radius:5px; border:1px #FFD42A solid; width:180px; height:180px;" id="imgs" src="'+img.src+'"/>').insertAfter('#cvs');
    };
    
    fr.readAsDataURL(this.files[0]);
    
});
   
   qrcode.callback = showInfo;
    $("#btnDecode").click(qrCodeDecoder);
	
  })
 
  function qrCodeDecoder(){
  var imagem = $('#imgs').attr('src');
  
    qrcode.decode(imagem);
  }
 
  function showInfo(data){
    alert(data);
  }

function ler(what){
if(what == "upload"){
document.getElementById("upload").style.display = "block";
document.getElementById("webcam").style.display = "none";
}
if(what == "webcam"){
document.getElementById("webcam").style.display = "block";
document.getElementById("upload").style.display = "none";
}
}
function abrir(who){
if(who == "criar"){
document.getElementById("novo_qrcode").style.display = "block";
document.getElementById("ler_qrcode").style.display = "none";
}
if(who == "ler"){
document.getElementById("ler_qrcode").style.display = "block";
document.getElementById("novo_qrcode").style.display = "none";
}

}
</script>

<body>
<script>
document.getElementById("webcam").style.display = "block";
document.getElementById("upload").style.display = "none";
</script>
<div id="webcam" style="text-align:center;">
<div style="width: 350px; height: 350px; margin: auto" id="qrcodebox">
</div>
<a href="#" id="btn_start" class="classname">Iniciar Leitura</a>
<a href="#" id="btn_stop"  class="classname">Finalizar Leitura</a>
<p>
Resultado da leitura: <span style="text-decoration:underline;" id="qrcode_result"><span style="color:#FF0000">Nenhum valor encontrado!</span></span>
</p>
<form action="entrar.php" method="get">
<input type="text" name="matricula" id="matricula"> 
<input type ="submit" onclick="myFunction()">
</form>
<script type="text/javascript"> 
function myFunction() {
    document.getElementById("matricula").value = document.getElementById("qrcode_result").innerHTML;
}
</script>

      <form action="afteradmlogin.php">
        <input type="submit" value="Voltar"/>
      </form>

</div>