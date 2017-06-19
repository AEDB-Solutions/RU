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
<div id="principal" style="width:470px; margin:0 auto; padding-top:200px; ">

<div  onclick="abrir('ler')" style="float:left; margin-right:30px; cursor:pointer; height:205px; border-radius:15px; background:#DDDDDD; border:2px #FF8000 solid;">
<img src="ler.fw.png" width="200" height="200" />
</div>
</div><!-- fechamento da div principal -->

<div id="ler_qrcode" style="clear:both; display:none; text-align:center; font-family:Georgia;">
<br>
<hr />
<p style="text-align:center;">Para ler seu QRcode selecione uma opção abaixo:</b></p>
<br>
<a href="#" onclick="ler('upload')">Upload de imagem</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="ler('webcam')">Webcam</a>


<div id="upload" style="display:none; text-align:center;"><br>
Selecione a imagem do seu QRcode do seu computador e em seguida clique em <b>Ler QRcode</b>
<br>
<input id="input" type="file" onclick="apaga_campo()"> 
<a href="#" id="btnDecode" class="classname">Ler QRcode</a>
<br>
<br>

<canvas id="cvs"
></canvas>
</div>

<div id="webcam" style="display:none; text-align:center;">
<div style="width: 350px; height: 350px;" id="qrcodebox">
</div>
<a href="#" id="btn_start" class="classname">Iniciar Leitura</a>
<a href="#" id="btn_stop"  class="classname">Finalizar Leitura</a>
<p>
Resultado da leitura: <span style="text-decoration:underline;" id="qrcode_result"><span style="color:#FF0000">Nenhum valor encontrado!</span></span>
</p>
</div>

</div>