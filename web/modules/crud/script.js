angular.module('pages', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/crud/angular', {templateUrl: '/crud/angular/list',   controller: PagesListCtrl}).
      when('/crud/angular/:pageId', {templateUrl: '/crud/angular/one', controller: PageDetailCtrl}).
      when('/crud/angular/update/:pageId', {templateUrl: '/crud/angular/update', controller: PageUpdateCtrl}).
      otherwise({redirectTo: '/crud/angular'});
}]);

function PagesListCtrl($scope, $http) {
	$http.get('/crud/angular/getlist').success(function(data) {
	    $scope.items = data;
	});
}

function PageDetailCtrl($scope, $routeParams, $http) {
	$http.get('/crud/angular/getone/id/'+$routeParams.pageId).success(function(data) {
	    $scope.params = data;
	});
}

function PageUpdateCtrl($scope, $routeParams, $http) {
	$http.get('/crud/angular/getone/id/'+$routeParams.pageId).success(function(data) {
	    $scope.params = data;
	});
}