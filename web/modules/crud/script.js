angular.module('pages', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/pages', {templateUrl: 'partials/pages-list.html',   controller: PagesListCtrl}).
      when('/pages/:pageId', {templateUrl: 'partials/page-detail.html', controller: PageDetailCtrl}).
      otherwise({redirectTo: '/pages'});
}]);

function PagesListCtrl($scope) {
	
}

function PageDetailCtrl($scope) {
	
}