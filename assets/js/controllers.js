


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

this.getSelectElements = function(values, callbackFunc) {
	$http({
		method: 'GET',
		url: values.url,
		params: values.elements
        /// headers: {'Authorization': 'Token token=xxxxYYYYZzzz'}
    }).success(function(response){
    	console.log(response);
    	callbackFunc(response.elements);
    }).error(function(){
    	console.log("error");
    });
};

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

pladiaApp.directive("isDate", function() {
	return {
		require: "ngModel",
		scope: {
			isDate: '='
		},
		link: function(scope, element, attrs, ctrl) {
			$('input.datepicker').datepicker({
		format: "yyyy/mm/dd",
		startDate: "1900/01/01",
		language: "es",
		autoclose: true
	});
		}
	};
});

pladiaApp.directive("isDateyear", function() {
	return {
		require: "ngModel",
		scope: {
			isDate: '='
		},
		link: function(scope, element, attrs, ctrl) {
			$('input.datepickeryear').datepicker({
		format: "yyyy",
		startDate: "1900",
		language: "es",
		autoclose: true,
		minViewMode: 2
	});
		}
	};
});


pladiaApp.directive("isDatemon", function() {
	return {
		require: "ngModel",
		scope: {
			isDate: '='
		},
		link: function(scope, element, attrs, ctrl) {
			$('input.datepickermon').datepicker({
		format: "yyyy/mm",
		startDate: "1900/01",
		language: "es",
		autoclose: true,
		minViewMode: 1
	});
		}
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

pladiaApp.controller('FormController', ['$scope', 'dataService', 'localStorageService', '$window', function($scope, dataService, localStorageService, $window) {
	console.log('hola');

	$scope.Encuesta = {};
	$scope.departamentos = {};
	$scope.municipios = {};
	$scope.FinalDate = [];

	var paramsTpto = {
		'elements': {
			"elements" : "departamentos"
		},
		'url' : "../general/getselectelements"
	};


	dataService.getSelectElements(paramsTpto, function(dataResponse){
		$scope.departamentos = dataResponse;
	});

	$scope.changeTab = function(idform){
		$('div.theform').addClass('hide');
		$('div#' + idform).removeClass('hide');
	};

	$scope.getMunicipio = function(){
		if(typeof $scope.Encuesta.departamento != 'undefined'){

			var paramsMcpo = {
				'elements': {
					"elements" : "municipios",
					"cod_dpto" : $scope.Encuesta.departamento
				},
				'url' : "../general/getselectelements"
			};


			dataService.getSelectElements(paramsMcpo, function(dataResponse){
				$scope.Encuesta.municipio = '';
				$scope.municipios = dataResponse;
			});


		};
	};

	$scope.saveForm1 = function(idform, idtab){
		$('div.theform').addClass('hide');
		$('div#' + idform).removeClass('hide');

		$('li.menu-tab').removeClass('active');
		$('li#' + idtab).addClass('active');

		
	};

	$scope.generateForm4 = function(value){
		if(typeof value != 'undefined' && value > 0){
			$scope.senForm4 = [];
			$scope.upaValues = true;
			for (i = 0; i < value; i++) { 
				$scope.senForm4.push(i);
			};

		};
	};

	$scope.validateEdad = function(dateEdad, sen){
		var valuetoYear = 1000 * 60 * 60 * 24 * 365;
		var date1 = new Date(dateEdad);
		var date2 = new Date();
		var date3 = Date.UTC(date2.getFullYear(), date2.getMonth(), date2.getDate());
		var date4 = Date.UTC(date1.getFullYear(), date1.getMonth(), date1.getDate());
		$scope.FinalDate[sen] = (date3 - date4) / valuetoYear;
		// console.log($scope.FinalDate);
	};

}]);