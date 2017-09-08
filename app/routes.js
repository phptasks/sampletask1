//var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
var app =  angular.module('main-App',['ngRoute']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'AdminController'
            /* }).
			when('/itemsadded', {
                templateUrl: 'templates/itemsadded.html',
                controller: 'ItemController'
            }).
            when('/items', {
                templateUrl: 'templates/items.html',
                controller: 'ItemController' */
            });
}]);