<div class="row">
	<h3>Especie {{pecuario + 1}}</h3>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>N° pecuario</label>
			<input type="text" ng-model="Encuesta.pecuario.numpecuario[pecuario]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>Nombre especie</label>
			<input type="text" ng-model="Encuesta.pecuario.nombreespecie[pecuario]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-4 col-md-4">
		<md-input-container class="md-block">
			<label>N° Animales</label>
			<input type="text" ng-model="Encuesta.pecuario.numanimales[pecuario]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Producto derivado</label>
			<input type="text" ng-model="Encuesta.pecuario.prodderivado[pecuario]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6">
		<md-input-container class="md-block">
			<label>Cantidad al mes</label>
			<input type="text" ng-model="Encuesta.pecuario.prodderivadocantidad[pecuario]" required>
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6 block">
	<label>Procedencia Alimentacion</label>
		<md-checkbox ng-model="Encuesta.pecuario.alimentacion1[pecuario]" aria-label="Propia" class="md-primary" value="1">
			Propia
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.pecuario.alimentacion2[pecuario]" aria-label="Intercambio" class="md-primary" value="1">
			Intercambio
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.pecuario.alimentacion3[pecuario]" aria-label="Compra" class="md-primary" value="1">
			Compra
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-6 col-md-6 block">
	<label>Práticas de manejo</label>
		<md-checkbox ng-model="Encuesta.pecuario.praticamanejo1[pecuario]" aria-label="Estabulado" class="md-primary" value="1">
			Estabulado
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.pecuario.praticamanejo2[pecuario]" aria-label="Semi- estabulado" class="md-primary" value="1">
			Semi- estabulado
		</md-checkbox>
		<md-checkbox ng-model="Encuesta.pecuario.praticamanejo3[pecuario]" aria-label="Libre / pastoreo" class="md-primary" value="1">
			Libre / pastoreo
		</md-checkbox>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">N° de Joranales</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Familiar</label>
			<input type="text" ng-model="Encuesta.pecuario.jornales1[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Libre</label>
			<input type="text" ng-model="Encuesta.pecuario.jornales2[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Gravado</label>
			<input type="text" ng-model="Encuesta.pecuario.jornales3[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Al cambio</label>
			<input type="text" ng-model="Encuesta.pecuario.jornales4[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-12 col-md-12">
		<legend class="md-subhead">Destino de la producción</legend>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Autoconsumo</label>
			<input type="text" ng-model="Encuesta.pecuario.destinoproduc1[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Venta comercial</label>
			<input type="text" ng-model="Encuesta.pecuario.destinoproduc2[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Tipo de mercado</label>
			<input type="text" ng-model="Encuesta.pecuario.destinoproduc3[pecuario]">
		</md-input-container>
	</div>
	<div class="col-xm-12 col-sm-3 col-md-3">
		<md-input-container class="md-block">
			<label>Frecuencia</label>
			<input type="text" ng-model="Encuesta.pecuario.destinoproduc4[pecuario]">
		</md-input-container>
	</div>
</div>
