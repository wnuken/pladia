


var pladiaApp = angular.module('pladiaApp',['LocalStorageModule', 'ngMaterial', 'ngMessages', 'ui.grid']);


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

this.save = function(params, path, callbackFunc) {
	$http({
		method: 'GET',
		url: path,
		params: params
        /// headers: {'Authorization': 'Token token=xxxxYYYYZzzz'}
    }).success(function(response){
    	callbackFunc(response);
    }).error(function(){
    	console.log("error");
    });
};

this.get = function(params, path, callbackFunc) {
	$http({
		method: 'GET',
		url: path,
		params: params
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

pladiaApp.controller('FormController', ['$scope', '$timeout', 'dataService', 'localStorageService', '$window', function($scope, $timeout, dataService, localStorageService, $window) {
	console.log('hola');
	var idForm = 1;

	$scope.Encuesta = {};
	$scope.departamentos = {};
	$scope.municipios = {};
	$scope.FinalDate = [];

	$timeout(function () {

		var url = '../general/getform';
		dataService.get($scope.Encuesta, url, function(dataResponse){
			console.log(dataResponse);
			$scope.Encuesta = dataResponse;
			$scope.getMunicipio();
			//$scope.Encuesta.municipio = dataResponse.municipio;
		});

		/*if(localStorageService.isSupported && typeof idForm != 'undefined'){
			$scope.Encuesta = localStorageService.get('Encuesta-' + idForm);
			if($scope.Encuesta == null){
				$scope.Encuesta = {};
			};
		};*/
	}, 1500);

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
				//$scope.Encuesta.municipio = '';
				$scope.municipios = dataResponse;
			});


		};
	};

	$scope.saveForm1 = function(idform, idtab){
		$('div.theform').addClass('hide');
		$('div#' + idform).removeClass('hide');

		$('li.menu-tab').removeClass('active');
		$('li#' + idtab).addClass('active');

		if(localStorageService.isSupported){
			localStorageService.add('Encuesta-' + idForm, $scope.Encuesta);
		};

		var url = '../general/save';
		dataService.save($scope.Encuesta, url, function(dataResponse){
			console.log(dataResponse);
		});

		
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


	$scope.generatePredios = function(value){
		if(typeof value != 'undefined' && value > 0){
			$scope.predios = [];
			//$scope.upaValues = true;
			if(value > 30)
				value = 30;
			for (i = 0; i < value; i++) {
				$scope.predios.push(i);
			};
		};
	};

	$scope.generateCultivos = function(value, id){
		if(typeof value != 'undefined' && value > 0){
			$scope.cultivos = [];
			$scope.cultivos[id] = [];
			//$scope.upaValues = true;
			for (i = 0; i < value; i++) {
				$scope.cultivos[id].push(i);
			};

			console.log($scope.cultivos);
		};
	};

	$scope.generatePecuaria = function(value){
		if(typeof value != 'undefined' && value > 0){
			$scope.pecuarios = [];
			if(value > 30)
				value = 30;
			//$scope.upaValues = true;
			for (i = 0; i < value; i++) {
				$scope.pecuarios.push(i);
			};
		};
	};

	$scope.generateExplotacion = function(value){
		if(typeof value != 'undefined' && value > 0){
			$scope.explotaciones = [];
			if(value > 30)
				value = 30;
			//$scope.upaValues = true;
			for (i = 0; i < value; i++) {
				$scope.explotaciones.push(i);
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

pladiaApp.controller('ReportesController', ['$scope', '$timeout', 'dataService', 'localStorageService', '$window', function($scope, $timeout, dataService, localStorageService, $window) {
	$scope.gridOptions = {
		modifierKeysToMultiSelectCells: true,
		showGridFooter: true,
		enableFiltering: true,
	};

	$scope.titles = {
		code: "Código",
		fechaform: "Fecha",
		encuenstado: "Encuestado",
		telefono: "Télefono",
		recolector: "Recolector",
		supervisor: "Supervisor",
		departamento: "Departamento",
		municipio: "Municipio",
		corregimiento: "Corregimiento",
		sectorrural: "Sector Rural",
		resguardo: "Territorio",
		nomcomunidad: "Nombre del Territorio",
		totalhogares: "Total Hogares",
		numerohogar: "Número Hogar",
		inundaciones: "Inundaciones",
		avalanchas: "Avalanchas",
		desbodamientos: "Desbordamiento de ríos, quebradas",
		deslizamientos: "Deslizamientos",
		vendavales: "Vendavales",
		otrodesastre: "Otro desastre natural",
		tiempovivido: "¿Ha vivido siempre en este municipio?",
		tiempovividoanos: "Desde que año vive en el municipio",
		razonvivirnum: "Razón para venir a este municipio",
		tipovivienda: "Tipo de vivienda",
		materialparedes: "Material paredes",
		materialpisos: "Material pisos",
		servienergia: "Servicio Energía",
		servigas: "Servicio Gas",
		servialcant: "Servicio alcantarillado",
		servireco: "Servicio recoleción de basuras",
		serviacueducto: "Servicio de acueducto",
		estrato: "Estrato",
		cuantaspersonas1: "¿Cuántas personas componen su hogar?",
		cuartos: "¿de cuántos cuartos en total dispone su hogar?",
		habitaciones: "¿En cuántos de esos cuartos  duermen las personas de su hogar?",
		basura: "¿Cómo eliminan principalmente la basura en su hogar?"
	};

	$scope.parasSend;

	var url = '../general/getreports';

	

	$scope.edit = function(id){
		console.log(id);
		var landingUrl = './formulario?idform='+id;
		$window.open(landingUrl, "_self");
	};

	$scope.gridOptions.columnDefs = [
	{ name: 'idform', width:'150', displayName: $scope.titles.code},
	{ name: 'fechaform', width:'150', displayName: $scope.titles.fechaform},
	{ name: 'nombreencuestado', width:'200', displayName: $scope.titles.encuenstado},
	{ name: 'telefonoencuestado', width:'100', displayName: $scope.titles.telefono},
	{ name: 'nombrerecolector', width:'180', displayName: $scope.titles.recolector},
	{ name: 'nombresupervisor', width:'180', displayName: $scope.titles.supervisor},
	{ name: "opciones",  cellTemplate:'./opcionreporte'}
	];

	dataService.get($scope.parasSend, url, function(dataResponse){
		console.log(dataResponse.elements.dataform);
		$scope.gridOptions.data = dataResponse.elements.dataform;

		angular.forEach($scope.gridOptions.data, function(value, key){
			if(value.sectorrural == 1){
				$scope.gridOptions.data[key].sectorrural = 'Centro Poblado';
			}else if(value.sectorrural == 2){
				$scope.gridOptions.data[key].sectorrural = 'Rural disperso';
			}else{
				$scope.gridOptions.data[key].sectorrural = '';
			};

			if(value.resguardo == 1){
				$scope.gridOptions.data[key].resguardo = 'Resguardo indígena';
			}else if(value.resguardo == 2){
				$scope.gridOptions.data[key].resguardo = 'Consejo comunigtario';
			}else{
				$scope.gridOptions.data[key].resguardo = '';
			};

			if(value.tiempovivido == 1){
				$scope.gridOptions.data[key].tiempovivido = 'SI';
			}else if(value.tiempovivido == 2){
				$scope.gridOptions.data[key].tiempovivido = 'NO';
			}else{
				$scope.gridOptions.data[key].tiempovivido = '';
			};


			if(value.razonvivirnum == 1){
				$scope.gridOptions.data[key].razonvivirnum = 'Laborales u oportunidad de negocio';
			}else if(value.razonvivirnum == 2){
				$scope.gridOptions.data[key].razonvivirnum = 'Más oportunidades de educación';
			}else if(value.razonvivirnum == 3){
				$scope.gridOptions.data[key].razonvivirnum = 'Motivos de salud';
			}else if(value.razonvivirnum == 4){
				$scope.gridOptions.data[key].razonvivirnum = 'Matrimonio o conformación de un hogar';
			}else if(value.razonvivirnum == 5){
				$scope.gridOptions.data[key].razonvivirnum = 'Amenaza o riesgo para su vida por conflicto armado';
			}else if(value.razonvivirnum == 6){
				$scope.gridOptions.data[key].razonvivirnum = 'Amenaza o riesgo para su vida por  delincuencia común';
			}else if(value.razonvivirnum == 7){
				$scope.gridOptions.data[key].razonvivirnum = value.razonvivirnumcual;
			}else{
				$scope.gridOptions.data[key].razonvivirnum = '';
			};

			if(value.tipovivienda == 1){
				$scope.gridOptions.data[key].tipovivienda = 'Casa';
			}else if(value.tipovivienda == 2){
				$scope.gridOptions.data[key].tipovivienda = 'Apartamento';
			}else if(value.tipovivienda == 3){
				$scope.gridOptions.data[key].tipovivienda = 'Cuartos en inquilinato';
			}else if(value.tipovivienda == 4){
				$scope.gridOptions.data[key].tipovivienda = 'Otro tipo de vivienda (carpa, tienda, vagón, refugio natural etc.)';
			}else{
				$scope.gridOptions.data[key].tipovivienda = '';
			};

			if(value.materialparedes == 1){
				$scope.gridOptions.data[key].materialparedes = 'Ladrillo a la vista';
			}else if(value.materialparedes == 2){
				$scope.gridOptions.data[key].materialparedes = 'Bloque a la vista';
			}else if(value.materialparedes == 3){
				$scope.gridOptions.data[key].materialparedes = 'Ladrillo o bloque revocado o pañetado';
			}else if(value.materialparedes == 4){
				$scope.gridOptions.data[key].materialparedes = 'Piedra o madera pulida';
			}else if(value.materialparedes == 5){
				$scope.gridOptions.data[key].materialparedes = 'Tapia pisada, adobe';
			}else if(value.materialparedes == 6){
				$scope.gridOptions.data[key].materialparedes = 'Madera burda, tabla o tablón';
			}else if(value.materialparedes == 7){
				$scope.gridOptions.data[key].materialparedes = 'Zinc, tela, lona, cartón, latas, desechos, plástico';
			}else{
				$scope.gridOptions.data[key].materialparedes = '';
			};

			if(value.materialpisos == 1){
				$scope.gridOptions.data[key].materialpisos = 'Baldosa, cerámica, madera pulida, alfombra';
			}else if(value.materialpisos == 2){
				$scope.gridOptions.data[key].materialpisos = 'Ladrillo, madera pulida sin lacar';
			}else if(value.materialpisos == 3){
				$scope.gridOptions.data[key].materialpisos = 'Madera burda, tabla o tablón, otro vegetal';
			}else if(value.materialpisos == 4){
				$scope.gridOptions.data[key].materialpisos = 'emento, gravilla';
			}else if(value.materialpisos == 5){
				$scope.gridOptions.data[key].materialpisos = 'Tierra, arena';
			}else{
				$scope.gridOptions.data[key].materialpisos = '';
			};

			if(value.basura == 1){
				$scope.gridOptions.data[key].basura = 'Por recolección pública o privada';
			}else if(value.basura == 2){
				$scope.gridOptions.data[key].basura = 'La tiran a un río, quebrada o laguna';
			}else if(value.basura == 3){
				$scope.gridOptions.data[key].basura = 'La tiran a un lote, zanja o baldío';
			}else if(value.basura == 4){
				$scope.gridOptions.data[key].basura = 'La queman o entierran';
			}else if(value.basura == 5){
				$scope.gridOptions.data[key].basura = 'La eliminan de otra forma';
			}else{
				$scope.gridOptions.data[key].basura = '';
			};
			

			
		});

		///$scope.municipios = dataResponse;
	});

	$scope.exportExcel = function(){
		$table = $.base64.encode($('div#exportTable').html());
		$window.open('data:application/vnd.ms-excel;base64,' + $table);
	};

	
}]);