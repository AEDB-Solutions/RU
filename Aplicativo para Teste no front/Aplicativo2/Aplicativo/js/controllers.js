angular.module('app.controllers',[])

.controller('bemVindoAAoIRuCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {


}])

.controller('signupCtrl', ['$scope', '$http', '$stateParams',function ($scope,$http){ // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
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
            alert("Senhas colocadas são diferentes");
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
          console.log(data);
        }).
        error(function(data,status,headers,config)
        {
          console.log("Error");
        })
        if(success=true)
        {
          alert('Bem vindo');
        }
        else
        {
          alert('Error')
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
    if(matricula.value == "")
    {
      alert('Favor preencer sua matrícula');
      return;
    }
    else
      {
      if(!filtro_matricula.test(matricula.value))
        {
        alert('Preencha a matrícula apenas com números')
        return;
        }
      else
        {
        if(matricula.value.length != 10)
        {
          alert('Matricula inválida. Matricula deve possuir 9 caracteres')
          return;
        }
        else rmatricula = document.getElementById("matricula").value;
        }
      }
      if(password.value == "")
      {
        alert('Digite uma senha de pelo menos 6 dígitos')
        return;
      }
        if(password.value.length < 6)
        {
          alert('Senha muito curta')
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
            alert(ematricula);
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
          console.log("Error");
        });
  }
}])

.controller('inicioCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {

}])

.controller('menuCtrl', ['$scope','$http','$stateParams','$state',function ($scope,$http,$stateParams,$state){// The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
  $scope.extrato = function ()
  {
  	$state.go("extrato");
    $scope.matricula = localStorage.getItem("matricula");
    var parameter = JSON.stringify({type:'Compras',matricula:$scope.matricula});
    $http.post("Extrato.php",parameter).
    success(function(data,status,headers,config)
    {
      alert (JSON.stringify(data));
      $(document).ready(function() {
      	$('#page15').DataTable({
      		"processing": true,
      		"ajax": 
      		{ 
      				"url" : "/opt/lampp/htdocs/Aplicativo/iRU/iRU/Aplicativo2/Aplicativo/Extrato.php",
      				"type": "GET"
      				dataSrc: '' /*function(json) 
      				{
      					var obj = JSON.parse(json);
      					console.log(obj);
      					return obj;
      				}*/
      		},
      		"columns" : [ {
      			"data" : "Matricula"
      		}]
      	});
      });

      //generatebalancetable(JSON.stringify(data));
      //$('#extrato').DataTable({
      	// data:
      	//}
    }).
    error(function(data,status,headers,config)
    {
      alert('Deu erro');
    });
}}])

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

.controller('capacityCtrl', ['$scope', '$stateParams','$http', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http) {
}])

.controller('extratoCtrl', ['$scope', '$stateParams','$http', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams, $http) {
}])