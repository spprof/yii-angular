angular.module('pages', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/crud/angular', {templateUrl: '/crud/angular/list',   controller: PagesListCtrl}).
      when('/crud/angular/:pageId', {templateUrl: '/crud/angular/one', controller: PageDetailCtrl}).
      otherwise({redirectTo: '/crud/angular'});
}]);

function PagesListCtrl($scope) {
	$http.get('/crud/angular/getlist').success(function(data) {
	    $scope.phones = data;
	});
}

function PageDetailCtrl($scope) {
	
}