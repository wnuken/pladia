


var pladiaApp = angular.module('pladiaApp',['LocalStorageModule', 'ngMaterial', 'ngMessages']);


pladiaApp.config(function(localStorageServiceProvider){
	localStorageServiceProvider
	.setPrefix('pladia');
  // .setStorageType('sessionStorage');
});

pladiaApp.filter('split', function() {
        return function(input, splitChar, splitIndex) {
            // do some bounds checking here to ensure it has that index
            if(typeof input != 'undefined' && input != '')
            	return input.split(splitChar)[splitIndex];
        }
    });


pladiaApp.service('dataService', function($http) {
// delete $http.defaults.headers.common['X-Requested-With'];

this.validate = function(values, callbackFunc) {
	$http({
		method: 'GET',
		url: values.url,
		params: values.elements
        /// headers: {'Authorization': 'Token token=xxxxYYYYZzzz'}
    }).success(function(response){
    	callbackFunc(response);
    }).error(function(){
    	console.log("error");
    });
};

});

pladiaApp.controller('LoginController', ['$scope', 'dataService', 'localStorageService', '$window', function($scope, dataService, localStorageService, $window) {
	$scope.Login = {};

	$scope.validateLogin = function(){

		var params = {
			"url" : "general/validate",
			"elements": $scope.Login
		};

			dataService.validate(params, function(dataResponse){
				if(dataResponse.status === true){
					var homeUrl = 'home/'
					$window.open(homeUrl, "_self");
				}else{
					console.log(dataResponse);
				}
				
			});
	};

	console.log('Hola');
}]);