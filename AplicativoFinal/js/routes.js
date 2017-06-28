angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider



    .state('tabsController', {
    url: '/page1',
    templateUrl: 'templates/tabsController.html',
    abstract:true
  })

    .state('signup', {
    url: '/page3',
    templateUrl: 'templates/signup.html',
    controller: 'signupCtrl'
  })

    .state('login', {
    url: '/page2',
    templateUrl: 'templates/login.html',
    controller: 'loginCtrl'
  })

    .state('inicio', {
    url: '/page1',
    templateUrl: 'templates/inicio.html',
    controller: 'inicioCtrl'
  })

    .state('menu', {
    url: '/page4',
    templateUrl: 'templates/mmenu.php',
    controller: 'menuCtrl'
  })

  .state('menuadm', {
    url: '/page5',
    templateUrl: 'templates/menuadm.html',
    controller: 'menuadmCtrl'
  })

  .state('capacidade', {
    url: '/page6',
    templateUrl: 'templates/lotacao.php',
    controller: 'capacityCtrl',
    })

  .state('extrato', {
    url: '/page7',
    templateUrl: 'templates/tables.html',
    controller: 'extratoCtrl',
    })

  .state('dados', {
    url: '/page8',
    templateUrl: 'templates/dados.html',
    controller: 'dadosCtrl',
    })

  .state('presente', {
    url: '/page9',
    templateUrl: 'templates/gift.html',
    controller: 'giftCtrl',
    })

  .state('fpassword', {
    url: '/page10',
    templateUrl: 'templates/fpassword.html',
    controller: 'fpasswordCtrl',
    })

  .state('newpassword', {
    url: '/page11',
    templateUrl: 'templates/sendnewpassword.html',
    controller: 'sendnewpasswordCtrl',
    })

  .state('maps', {
    url: '/page13',
    templateUrl: 'templates/mapa.html',
    controller: 'mapCtrl',
    })

  .state('parmaps', {
    url: '/page12',
    templateUrl: 'templates/parmap.html',
    controller: 'parmapCtrl',
    })

  .state('QRCode', {
    url: '/page14',
    templateUrl: 'templates/QRC.html',
    controller: 'QRCCtrl',
    })
$urlRouterProvider.otherwise('/page1')



});
