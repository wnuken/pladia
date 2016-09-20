<div class="row">
	<h3>Predio {{(predio + 1)}}</h3>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Tenencia de tierras</label>
			<md-select ng-model="Encuesta.tenencia[predio]" required>
				<md-option value="1">Propietario con título</md-option>
				<md-option value="2">Poseedor</md-option>
				<md-option value="3">Arrendatario</md-option>
				<md-option value="4">Prestado</md-option>
				<md-option value="5">Amediero</md-option>
				<md-option value="6">Territorio colectivo</md-option>
			</md-select>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Área Total <small>(Hectareas)</small></label>
			<input type="text" ng-model="Encuesta.area[predio]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Actividades prediales</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3 block">

		<md-checkbox ng-model="Encuesta.prediales1[predio]" aria-label="Agrícolas" class="md-primary" value="1">
			Agrícolas
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.prediales2[predio]" aria-label="Especies menores" class="md-primary" value="1">
			Especies menores
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3 block">
		<md-checkbox ng-model="Encuesta.prediales3[predio]" aria-label="Ganadería" class="md-primary" value="1">
			Ganadería
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.prediales4[predio]" aria-label="Piscicultura" class="md-primary" value="1">
			Piscicultura
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3 block">
		<md-checkbox ng-model="Encuesta.prediales5[predio]" aria-label="Caza y recolección" class="md-primary" value="1">
			Caza y recolección
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.prediales6[predio]" aria-label="Explotación  forestal" class="md-primary" value="1">
			Explotación  forestal
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3 block">
		<md-checkbox ng-model="Encuesta.prediales7[predio]" aria-label="Sin uso" class="md-primary" value="1">
			Sin uso
		</md-checkbox>
	</div>

	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Problemas en la producción</legend>
	</div>

	<div class="col-xm-12 col-sm-4 col-md-4 block">

		<md-checkbox ng-model="Encuesta.problemaspro1[predio]" aria-label="Erosión de suelos" class="md-primary" value="1">
			Erosión de suelos
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.problemaspro2[predio]" aria-label="Falta de asistencia técnica" class="md-primary" value="1">
			Falta de asistencia técnica
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.problemaspro3[predio]" aria-label="Falta de mercado" class="md-primary" value="1">
			Falta de mercado
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.problemaspro4[predio]" aria-label="Presencia de plagas y enfermedades" class="md-primary" value="1">
			Presencia de plagas y enfermedades
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.problemaspro5[predio]" aria-label="Falta de transformación" class="md-primary" value="1">
			Falta de transformación
		</md-checkbox>

		<md-checkbox ng-model="Encuesta.problemaspro6[predio]" aria-label="Otro" class="md-primary" value="1">
			Otro
		</md-checkbox>

	</div>

	<div class="col-xm-12 col-sm-12 col-md-12">
		<md-input-container class="md-block" ng-if="Encuesta.problemaspro6[predio]">
			<label>Cual </label>
			<input type="text" ng-model="Encuesta.problemaspro6otro[predio]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Fuente de financiación para la producción</legend>
	</div>

	<div class="col-xm-12 col-sm-4 col-md-4 block">

		<md-checkbox ng-model="Encuesta.fuenteproduccion2[predio]" aria-label="Recursos propios" class="md-primary" value="1">
			Recursos propios
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.fuenteproduccion2[predio]" aria-label="Préstamos  personales" class="md-primary" value="1">
			Préstamos personales
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4 block">
		<md-checkbox ng-model="Encuesta.fuenteproduccion3[predio]" aria-label="Préstamos fondos rotatorios" class="md-primary" value="1">
			Préstamos fondos rotatorios
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.fuenteproduccion4[predio]" aria-label="Préstamos bancarios" class="md-primary" value="1">
			Préstamos bancarios
		</md-checkbox>
	</div>

	<div class="col-xm-12 col-sm-12 col-md-12">
		<md-input-container class="md-block">
			<label>Cantidad de cultivos <small>(Máximo 30)</small></label>
			<input type="text" ng-model="cantidadCultivos[predio]" ng-change="generateCultivos(cantidadCultivos[predio], predio)" max="30" required>
		</md-input-container>
	</div>
	<div class="row">
		<md-content class="md-padding">
			<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
				<md-tab ng-repeat="cultivo in cultivos[predio]"
				ng-disabled="tab.disabled"
				label="Cultivo {{cultivo + 1}}">
				<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
					<div ng-bind="tab.content">{{cultivo}}</div>
					<?php $this->load->view('template/home/form3-agricola-cultivo'); ?>
				</div>

			</md-tab>
		</md-tabs>
	</md-content>
</div>
</div>