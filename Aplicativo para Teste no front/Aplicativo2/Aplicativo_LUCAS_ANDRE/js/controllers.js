angular.module('app.controllers', [])

.controller('bemVindoAAoIRuCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {


}])

.controller('signupCtrl', ['$scope', '$http', '$stateParams',function ($scope,$http){ // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
//function ($scope,$http, $stateParams)
  $scope.enviacadastro = function ()
  {
    var rusername;
    var rmatricula;
    var remail;
    var rpassword;
    var filtro_name =  /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]+$/;
    var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var filtro_matricula = /^[0-9 /]+$/;

    /*$scope.validanome = function ()
    {*/
      if(userName.value == "")
      {
        alert('Favor preencher o nome de usuario');
        return;
      }
      else
        if(!filtro_name.test(userName.value))
        {
          alert('Nome de usuário pode conter apenas letras');
          return;
        }
        else
          {
            if (userName.value.length < 7)
            {
              alert('Nome de usuário deve conter no mínimo 7 caracteres');
              return;
            }
            else rusername = document.getElementById("userName").value;
          }
    //}
      if(matrIcula.value == "")
      {
        alert('Favor preencer sua matrícula');
        return;
      }
      else
      {
        if(!filtro_matricula.test(matrIcula.value))
        {
          alert('Preencha a matrícula apenas com números')
          return;
        }
        else
        {
          if(matrIcula.value.length != 10)
          {
            alert('Matricula inválida. Matricula deve possuir 9 caracteres')
            return;
          }
          else rmatricula = document.getElementById("matrIcula").value;
        }
      }

      if(Email.value == "")
      {
        alert('Digite um email')
        return;
      }
      else
      {
        if(!filtro_email.test(Email.value))
        {
          alert ('O email não está no formato correto')
          return;
        }
        else remail = document.getElementById("Email").value;
      }

      if(passWord.value == "")
      {
        alert('Digite uma senha de pelo menos 6 dígitos')
        return;
      }
        if(passWord.value.length < 6)
        {
          alert('Senha muito curta')
          return;
        }
        else rpassword = document.getElementById("passWord").value;

    var newUser = [rusername,rmatricula,remail,rpassword];
    var parameter = JSON.stringify({type:'newUser', username:rusername, matricula:rmatricula, email:remail, password:rpassword});
      $http.post("server.php", parameter).
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
    }
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

.controller('menuCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
function ($scope, $stateParams) {


}])
