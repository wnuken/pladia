<form id="Form3" name="Form3">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			<div class="col-xm-12 col-sm-12 col-md-12">
				<div class="col-xm-12 col-sm-4 col-md-4">
					<md-input-container class="md-block">
						<label>Nombre(s) y apellido(s) de la persona</label>
						<input type="text" ng-model="Encuesta.nombrePersona" required>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-4 col-md-4">
					<md-input-container class="md-block">
						<label>Número de orden de la persona </label>
						<input type="text" ng-model="Encuesta.numeroPersona" required>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-4 col-md-4">
							<label>Sexo</label>
							<md-radio-group ng-model="Encuesta.sexoPersona" layout="row" required>
								<md-radio-button value="1" class="md-primary">Hombre</md-radio-button>
								<md-radio-button value="2" class="md-primary">Mujer</md-radio-button>
							</md-radio-group>
						</div>
						</div>
						<div class="col-xm-12 col-sm-4 col-md-4">
					<md-input-container class="md-block">
						<label>¿Cuál es su orientación sexual?</label>
						<md-select ng-model="Encuesta.sexualidadPersona" required>
							<md-option value="1">Heterosexual</md-option>
							<md-option value="2">Homosexual</md-option>
							<md-option value="3">Bisexual</md-option>
							<md-option value="4">Transexual</md-option>
						</md-select>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-4 col-md-4">
					<md-input-container class="md-block">
						<label>Fecha Nacimiento</label>
						<input type="text" ng-model="Encuesta.edadPersona" class="datepicker" is-date readonly required>
					</md-input-container>
				</div>
			</div>
		</div>
	</div>
</form>