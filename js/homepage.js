// Variable app
var homeApp = angular.module('homeApp', []);

homeApp.controller('barControllers', ['$scope', '$http', function($scope, $http) {
	$http.get('../info/barinfo.json').success(function(data) {
		$scope.users = data;
	});
}]);
