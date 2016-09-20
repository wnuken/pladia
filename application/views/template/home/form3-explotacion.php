<div class="row">
	<h3>Actividad {{explotacion + 1}}</h3>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Nombre </label>
			<input type="text" ng-model="Encuesta.explota.nombre[explotacion]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Donde se encuentra</legend>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<md-checkbox ng-model="Encuesta.explota.encuentra1[explotacion]" aria-label="Cultivos" class="md-primary" value="1">
			Cultivos
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.encuentra2[explotacion]" aria-label="Potreros" class="md-primary" value="1">
			Potreros
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.encuentra3[explotacion]" aria-label="Rastrojo para siembra" class="md-primary" value="1">
			Rastrojo para siembra
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.encuentra4[explotacion]" aria-label="Rastrojo para regeneración" class="md-primary" value="1">
			Rastrojo para regeneración
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.encuentra5[explotacion]" aria-label="Selva" class="md-primary" value="1">
			Selva
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Usos</legend>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.explota.usos1[explotacion]" aria-label="Construción" class="md-primary" value="1">
			Construción
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.usos2[explotacion]" aria-label="Combustible" class="md-primary" value="1">
			Combustible
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.usos3[explotacion]" aria-label="Medicinal / veterinario" class="md-primary" value="1">
			Medicinal / veterinario
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.explota.usos4[explotacion]" aria-label="Alimenticio" class="md-primary" value="1">
			Alimenticio
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.explota.usos5[explotacion]" aria-label="Utensilios/ artesanías / mat. Prima " class="md-primary" value="1">
			Utensilios/ artesanías / mat. Prima 
		</md-checkbox>

		<md-checkbox ng-model="Encuesta.explota.usos6[explotacion]" aria-label="Ambiental" class="md-primary" value="1">
			Ambiental
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.explota.usos7[explotacion]" aria-label="Cultural" class="md-primary" value="1">
			Cultural
		</md-checkbox>

		<md-checkbox ng-model="Encuesta.explota.usos8[explotacion]" aria-label="Otro" class="md-primary" value="1">
			Otro
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Destino de la producción</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Autoconsumo</label>
			<input type="text" ng-model="Encuesta.explota.destinoproduc1[predio][explotacion]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Venta comercial</label>
			<input type="text" ng-model="Encuesta.explota.destinoproduc2[predio][explotacion]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Tipo de mercado</label>
			<input type="text" ng-model="Encuesta.explota.destinoproduc3[predio][explotacion]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Frecuencia</label>
			<input type="text" ng-model="Encuesta.explota.destinoproduc4[predio][explotacion]">
		</md-input-container>
	</div>
</div>