angular.module('app.controllers',[])

.controller('bemVindoAAoIRuCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {


}])

.controller('signupCtrl', ['$scope','$http','$stateParams','$state',function ($scope,$http,$stateParams,$state){ // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
//function ($scope,$http, $stateParams)

$scope.validaCPF = function(strCPF)
{
var Soma;
var Resto;
var cboll = true;
Soma = 0;

if (strCPF.length != 11 ||
strCPF == "00000000000" ||
strCPF == "11111111111" ||
strCPF == "22222222222" ||
strCPF == "33333333333" ||
strCPF == "44444444444" ||
strCPF == "55555555555" ||
strCPF == "66666666666" ||
strCPF == "77777777777" ||
strCPF == "88888888888" ||
strCPF == "99999999999")
cboll = false;

for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
Resto = (Soma * 10) % 11;

if ((Resto == 10) || (Resto == 11)) Resto = 0;
if (Resto != parseInt(strCPF.substring(9, 10)) ) cboll = false;

Soma = 0;
for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
Resto = (Soma * 10) % 11;

if ((Resto == 10) || (Resto == 11)) Resto = 0;
if (Resto != parseInt(strCPF.substring(10, 11) ) ) cboll = false;

if(!cboll){
//$('#cpf').css('background-color','#FF7171');
//$('#cpf').focus();
}else{
//$('#cpf').css('background-color','#FFF');
//return rcpf=document.getElementById('cpf').value;
return cboll;
}
}
  $scope.enviacadastro = function ()
  {
    var rusername;
    var rmatricula;
    var remail;
    var rpassword;
    var rpassword2;
    var rrcpf;
    var rcpf;
    var rage;
    var rcurso;
    var gender;
    var filtro_name =  /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]+$/;
    var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var filtro_matricula = /^[0-9 /]+$/;

    /*$scope.validanome = function ()
    {*/
      caixa_name = document.querySelector('.msg-name');
      caixa_name.style.display = 'none';
      if(userName.value == "")
      {
        caixa_name.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Favor preencher o nome de usuário</div>";
        caixa_name.style.display = 'block';
        return;
      }
      else
        if(!filtro_name.test(userName.value))
        {
          caixa_name.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Nome de usuário pode conter apenas letras</div>";
          caixa_name.style.display = 'block';
          return;
        }
        else
          {
            if (userName.value.length < 7)
            {
              caixa_name.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Nome de usuário deve conter no mínimo 7 caracteres</div>";
              caixa_name.style.display = 'block';
              return;
            }
            else rusername = document.getElementById("userName").value;
          }
    //}
      caixa_matricula = document.querySelector('.msg-matricula');
      caixa_matricula.style.display = 'none';
      if(matrIcula.value == "")
      {
        caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Favor preencher sua matrícula</div>";
        caixa_matricula.style.display = 'block';
        return;
      }
      else
      {
        if(!filtro_matricula.test(matrIcula.value))
        {
          caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Preencha a matrícula apenas com números</div>";
          caixa_matricula.style.display = 'block';
          return;
        }
        else
        {
          if(matrIcula.value.length != 10)
          {
            caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Matricula inválida. Matricula deve possuir 9 caracteres</div>";
            caixa_matricula.style.display = 'block';
            return;
          }
          else rmatricula = document.getElementById("matrIcula").value;
        }
      }

      caixa_email = document.querySelector('.msg-email');
      caixa_email.style.display = 'none';
      if(Email.value == "")
      {
        caixa_email.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Digite um email</div>";
        caixa_email.style.display = 'block';
        return;
      }
      else
      {
        if(!filtro_email.test(Email.value))
        {
          caixa_email.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>O email não está no formato correto</div>";
          caixa_email.style.display = 'block';
          return;
        }
        else remail = document.getElementById("Email").value;
      }

      caixa_password = document.querySelector('.msg-password');
      caixa_password.style.display = 'none';
      if(passWord.value == "")
      {
        caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Digite uma senha de pelo menos 6 dígitos</div>";
        caixa_password.style.display = 'block';
        return;
      }
        if(passWord.value.length < 6)
        {
          caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Senha muito curta</div>";
          caixa_password.style.display = 'block';
          return;
        }
        else
        {
          if(passWord.value == passWord2.value)
          {
            rpassword = document.getElementById("passWord").value;
          }
          else {
            caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Senhas diferentes</div>";
            caixa_password.style.display = 'block';
            return;
          }
        }
        /*rrcpf = $scope.validaCPF(strCPF);
        if(rrcpf == true)
        {
          rcpf = document.getElementById("cpf").value;
        }*/
        if(cpf.value.length = 11)
        	{
        		rcpf = document.getElementById("cpf").value;
        	}
        else alert('Error');
        rage = document.getElementById("age").value;
        rgender = document.getElementById("gender").value;
        rcurso = document.getElementById("curso").value;
    var newUser = [rusername,rmatricula,remail,rpassword,rcpf,rage,rgender,rcurso];
    console.log(newUser);
    var parameter = JSON.stringify({type:'newUser', username:rusername, matricula:rmatricula, email:remail, password:rpassword, cpf:rcpf, gender:rgender, age:rage, curso:rcurso});
      $http.post("Signup.php", parameter).
        success(function(data,status,headers,config)
        {
          $state.go("login");
        }).
        error(function(data,status,headers,config)
        {
          alert("Erro na conexão");
        })
        if(success=true)
        {
          alert('Bem vindo');
        }
        else
        {
          alert('Erro no cadastramento');
        }
    };
}])

.controller('loginCtrl', ['$scope','$http','$stateParams','$state',function ($scope,$http,$stateParams,$state){ // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
  $scope.entrar = function()
  {
    var filtro_matricula = /^[0-9 /]+$/;
    var ematricula = document.getElementById('matricula').value;
    var epassword = document.getElementById('password').value;
    caixa_matricula = document.querySelector('.msg-matricula');
    caixa_matricula.style.display = 'none';
    if(matricula.value == "")
    {
        caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Campo matricula vazio</div>";
        caixa_matricula.style.display = 'block';
        return;
    }
    else
      {
      if(!filtro_matricula.test(matricula.value))
        {
        caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Matricula deve conter apenas números</div>";
        caixa_matricula.style.display = 'block';
        return;
        }
      else
        {
        if(matricula.value.length != 10)
        {
          caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Matricula deve possuir 9 caracteres</div>";
          caixa_matricula.style.display = 'block';
          return;
        }
        else rmatricula = document.getElementById("matricula").value;
        }
      }
        caixa_password = document.querySelector('.msg-password');
    	caixa_password.style.display = 'none';
      if(password.value == "")
      {
        alert('Digite uma senha de pelo menos 6 dígitos')
        return;
      }
        if(password.value.length < 6)
        {
          caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Senha muito curta. Minimo de 6 caracteres</div>";
          caixa_password.style.display = 'block';
          return;
        }
        else rpassword = document.getElementById("password").value;
        var Users = [matricula,password];
        var parameter = JSON.stringify({type:'Users',matricula:ematricula,password:epassword});
        $http.post("Login.php", parameter).
        success(function(data,status,headers,config)
        {
          if(data == true)
          {
            $scope.matricula = ematricula;
            localStorage.setItem("matricula",$scope.matricula);
            $state.go("menu");
          }
          else
          {
            if(data == false)
            {
              alert("Matrícula ou senha inválidas");
            }
          }
        }).
        error(function(data,status,headers,config)
        {
          console.log("Erro na conexão");
        });
  }
}])

.controller('inicioCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {

}])

.controller('menuCtrl', function ($scope, $stateParams, $http) { // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
$scope.matricula = localStorage.getItem("matricula");
	var matricula = $scope.matricula;
	var parameter = JSON.stringify({type:'Saldo',matricula:matricula})
	var parameters = JSON.stringify({type:'Name',Matricula:matricula})
		$http.post("saldo.php",parameter).
		success(function(data,status,headers,config)
		{
      		$scope.mySaldo = data;
		}).
		error(function(data,status,headers,config)
		{
			alert("Erro na conexão");
		})

		$http.post("GetName.php",parameters).
		success(function(data,status,headers,config)
		{
      		$scope.myName = data;
		}).
		error(function(data,status,headers,config)
		{
			alert("Erro na conexão2");
		})
})

.controller('menuadmCtrl', ['$scope', '$stateParams','$http', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http) {
  $scope.extratoadm = function()
  {
    $http.get("Extratoadm.php").
    success(function(data,status,headers,config)
    {
      alert(JSON.stringify(data));
    }).
    error(function(data,status,headers,config)
    {
      alert('Deu error 2');
    });
  }
}])

.controller('capacityCtrl', function ($scope, $stateParams, $http) { // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName

})

.controller('extratoCtrl', ['$scope', '$stateParams','$http','$state',
function ($scope, $stateParams, $http, $state) {
  $scope.dados = [];
  $scope.matricula = localStorage.getItem("matricula");
  var parameter = JSON.stringify({type:'Compras',matricula:$scope.matricula});
    $http.post("Extrato.php",parameter).success(function(dados,status,headers,config)
    {
        $scope.dados = dados;
        $state.go("extrato");
    });
}])

.controller('dadosCtrl', ['$scope', '$stateParams','$http', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http) {
	$scope.enviadados = function()
	{
		var token = "A173387059844BB78C15679EBAB67B84";
		var myurl = "https://ws.pagseguro.uol.com.br/v2/checkout/?email=ruonlineunb@gmail.com&token=" + token;
		$scope.matricula = localStorage.getItem("matricula");
		var parser, xmlDoc;
		var quantidade = document.getElementById("qtrefeicoes").value;
		var matricula = $scope.matricula;
   // matricula = matricula.replace(/\\/g, '');
		var text = "<checkout>" +
		  "<currency>BRL</currency>" +
		  "<items>" +
		    "<item>" +
		      "<id>0001</id>" +
		      "<description>Passe do RU</description>" +
		      "<amount>2.50</amount>" +
		      "<quantity>" + quantidade +"</quantity>" +
		    "</item>" +
		  "</items>" +
		  "<reference>" + matricula +"</reference>" +
		  "<maxAge>999999999</maxAge>" +
		  "<maxUses>999</maxUses>" +
		  "<receiver>" +
		    "<email>ruonlineunb@gmail.com</email>" +
		  "</receiver>" +
		"</checkout>";
		$http
		({
    		method: 'POST',
    		url: myurl,
    		data: text,
    		headers: { "Content-Type": 'application/xml; charset=ISO-8859-1' }
		}).
		    success(function(data,status,headers,config)
    {
      parser = new DOMParser();
      xmlDoc = parser.parseFromString(data,"text/xml");
      var code =xmlDoc.getElementsByTagName("code")[0].childNodes[0].nodeValue;
      thisurl = "https://pagseguro.uol.com.br/v2/checkout/payment.html?code=" + code;
      window.open(thisurl);
    }).
    error(function(data,status,headers,config)
    {
      alert("Erro na conexão");
    });
}}])

.controller('giftCtrl', ['$scope','$stateParams','$http','$ionicPopup', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http, $ionicPopup) {

	$scope.showConfirm = function() {
     var confirmPopup = $ionicPopup.confirm({
       title: 'Tem certeza que deseja presentear o seu amigo?',
       template: 'ATENÇÃO: Esse processo é irreversível.'
     });
     confirmPopup.then(function(res) {
       if(res) {
         $scope.enviadadosgift();
       } else {
         alert("Operação cancelada!");
       }
     })
   }

	$scope.enviadadosgift = function ()
	{
   		$scope.matricula = localStorage.getItem("matricula");
   	 	var matricula = $scope.matricula
		var gmatriculagift = document.getElementById("matriculagift").value;
		var gqtrefeicoesgift = document.getElementById("qtrefeicoesgift").value;
		var gpasswordconfirm = document.getElementById("confirmpassword").value;
		var gift = [$scope.matricula,gmatriculagift,gqtrefeicoesgift,gpasswordconfirm]
  		var parameter = JSON.stringify({type:'Presente',matricula:matricula,matriculagift:gmatriculagift,refeicoes:gqtrefeicoesgift,password:gpasswordconfirm});
        	$http.post("presente.php", parameter).
        success(function(data,status,headers,config)
        {
          if(data == true)
          {
            alert("Presente enviado com sucesso");
          }
          else alert("Matricula inválida ou saldo insuficiente");
        }).
        error(function(data,status,headers,config)
        {
          console.log("Erro na conexão");
        })
    };
}])

.controller('fpasswordCtrl', ['$scope', '$stateParams', '$http', '$ionicPopup', "$state", // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http, $ionicPopup, $state) {
	/*$scope.showPopup = function() {
   $scope.data = {}

   // An elaborate, custom popup
   var myPopup = $ionicPopup.show({
     template: '<input type="password" ng-model="data.wifi">',
     title: 'Digite sua nova senha',
     //subTitle: '',
     scope: $scope,
     buttons: [
       { text: 'Cancelar' },
       {
         text: '<b>Salvar</b>',
         type: 'button-positive',
         onTap: function(e) {
           if (!$scope.data.wifi) {
             //don't allow the user to close unless he enters wifi password
             e.preventDefault();
           } else {
             return $scope.data.wifi;
           }
         }
       },
     ]
   });
   myPopup.then(function(res) {
   	if(res)
   	{
     $scope.forgottenpassword();
   	}else
   	{
   		alert("Operação cancelada");
   	}
   });
  }*/
	$scope.fpassword = function ()
	{
		var cemail = document.getElementById("emailconfirm").value;
		var ccpf = document.getElementById("cpfconfirm").value;
		var confirmdata = [cemail,ccpf];
		var parameter = JSON.stringify({type:'confirmdata',email:cemail,cpf:ccpf});
		   $http.post("Fpassword.php", parameter).
        success(function(data,status,headers,config)
        {
          if(data == true)
          {
            $state.go("newpassword");
          }
          else alert("CPF ou Email inválido");
        }).
        error(function(data,status,headers,config)
        {
          console.log("Error");
        })
    };
}])

.controller('sendnewpasswordCtrl', ['$scope', '$stateParams', '$http', '$ionicPopup', '$state', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http, $ionicPopup, $state) {
	$scope.sendnewpassword = function ()
	{
		var filtro_cmatricula = /^[0-9 /]+$/;
    	caixa_matricula = document.querySelector('.msg-matricula');
    	caixa_matricula.style.display = 'none';
    if(cmatricula.value == "")
    {
        caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Campo matricula vazio</div>";
        caixa_matricula.style.display = 'block';
        return;
    }
    else
      {
      if(!filtro_cmatricula.test(cmatricula.value))
        {
        caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Matricula deve conter apenas números</div>";
        caixa_matricula.style.display = 'block';
        return;
        }
      else
        {
        if(cmatricula.value.length != 10)
        {
          caixa_matricula.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Matricula deve possuir 9 caracteres</div>";
          caixa_matricula.style.display = 'block';
          return;
        }
        else cmatricula = document.getElementById("cmatricula").value;
        }
      caixa_password = document.querySelector('.msg-password');
      caixa_password.style.display = 'none';
      if(npassword.value == "")
      {
        caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Digite uma senha de pelo menos 6 dígitos</div>";
        caixa_password.style.display = 'block';
        return;
      }
        if(npassword.value.length < 6)
        {
          caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Senha muito curta</div>";
          caixa_password.style.display = 'block';
          return;
        }
        else
        {
          if(npassword.value == cnpassword.value)
          {
            newpassword = document.getElementById("npassword").value;
          }
          else {
            caixa_password.innerHTML = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Senhas diferentes</div>";
            caixa_password.style.display = 'block';
            return;
          }
        }        
		/*if(npassword.value == cnpassword.value)
          {
            newpassword = document.getElementById("npassword").value;
          }
          else
          {
            alert("Senhas colocadas são diferentes");
            return;
          }*/
       }
		var parameter = JSON.stringify({type:'Users',matricula:cmatricula,password:newpassword})
        $http.post("Npassword.php", parameter).
        success(function(data,status,headers,config)
        {
          if(data == true)
          {
            alert("Senha alterada com sucesso");
            $state.go("login");
          }
          else alert("Falha na troca de senha");
        }).
        error(function(data,status,headers,config)
        {
          console.log("Erro na conexão");
        })
    };
}])

.controller('mapCtrl', function ($scope, $stateParams, $http) { // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
	$scope.url = localStorage.getItem("url");
	$scope.teste = $scope.url;
})

.controller('parmapCtrl', ['$scope', '$stateParams', '$http', '$ionicPopup', '$state', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http, $ionicPopup, $state) {
  $scope.inputs = [];
  $scope.inputs2 = [];
  $scope.inputs3 = [];

  $scope.addfield=function()
  {
    $scope.inputs.push({})
    $scope.teste = true;
  }

    $scope.addfield2=function()
  {
    $scope.inputs2.push({})
    $scope.teste2 = true;
  }

   $scope.addfield3=function()
  {
    $scope.inputs3.push({})
    $scope.teste3 = true;
  }

  $scope.sendpoints = function ()
  {
  	var pontopartida = document.getElementById("PP").value;
  	var horasaida = document.getElementById("HP").value;
  	var secsaida = document.getElementById("SP").value;
  	var tempofila = document.getElementById("TF").value;
  	if (document.getElementById("PE") == null)
  		{
  			pontopassagem = null;
  		}
  	else pontopassagem = document.getElementById("PE").value;
  	if (document.getElementById("PE2") == null)
  		{
  			pontopassagem2 = null;
  			//alert ("testandoessacaralhuda");
  		}
  	else pontopassagem2 = document.getElementById("PE2").value;
  	if (document.getElementById("PE3") == null)
  		{
  			pontopassagem3 = null;
  		}
  	else pontopassagem3 = document.getElementById("PE3").value;
  	//var testandoessacaralhuda = [pontopartida,horariosaida,tempofila,pontopassagem,pontopassagem2,pontopassagem3];
  	//console.log(testandoessacaralhuda);
  	var sendTime = parseFloat(horasaida) + parseFloat(secsaida)/60;
	var parameter = JSON.stringify({type:'Distancias',Origem:pontopartida,Horario:sendTime,Tempo:tempofila,Destino:pontopassagem,Destino2:pontopassagem2,Destino3:pontopassagem3})
        $http.post("Rotas.php", parameter).
        success(function(data,status,headers,config)
        {
           $scope.url = data;
           localStorage.setItem("url",$scope.url);
           $state.go("maps");
        }).
        error(function(data,status,headers,config)
        {
          alert("Erro na conexão");
        })
  }
}])

.controller('QRCCtrl', function ($scope, $stateParams, $http) { // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
	$scope.matricula = localStorage.getItem("matricula");
	var matricula = $scope.matricula;
	var parameter = JSON.stringify({type:'QRCode',Matricula:matricula})
		$http.post("testeQR.php",parameter).
		success(function(data,status,headers,config)
		{
      		$scope.myImg = "img_qrcodes/" + data + ".png";
		}).
		error(function(data,status,headers,config)
		{
			alert("Erro na conexão");
		})
})
