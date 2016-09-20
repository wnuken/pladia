<div class="row">
	<h3>Cultiuvo {{cultivo + 1}}</h3>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Nombre del cultivo</label>
			<input type="text" ng-model="Encuesta.nombrecultivo[predio][cultivo]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Área del cultivo</label>
			<input type="text" ng-model="Encuesta.areacultivo[predio][cultivo]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Arrobas cosechadas</label>
			<input type="text" ng-model="Encuesta.arrobascosecha[predio][cultivo]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>N° de cosechas por año</label>
			<input type="text" ng-model="Encuesta.numerocosecha[predio][cultivo]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Procedencia de la semilla (Kilogramos)</legend>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>Propia</label>
			<input type="text" ng-model="Encuesta.procedenciasemilla1[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>Intercambio</label>
			<input type="text" ng-model="Encuesta.procedenciasemilla2[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>Compra</label>
			<input type="text" ng-model="Encuesta.procedenciasemilla3[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">N° de Joranales</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Familiar</label>
			<input type="text" ng-model="Encuesta.jornales1[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Libre</label>
			<input type="text" ng-model="Encuesta.jornales2[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Gravado</label>
			<input type="text" ng-model="Encuesta.jornales3[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Al cambio</label>
			<input type="text" ng-model="Encuesta.jornales4[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Destino de la producción</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Autoconsumo</label>
			<input type="text" ng-model="Encuesta.destinoproduc1[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Venta comercial</label>
			<input type="text" ng-model="Encuesta.destinoproduc2[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Tipo de mercado</label>
			<input type="text" ng-model="Encuesta.destinoproduc3[predio][cultivo]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Frecuencia</label>
			<input type="text" ng-model="Encuesta.destinoproduc4[predio][cultivo]">
		</md-input-container>
	</div>
</div>