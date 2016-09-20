<form id="Form3" name="Form3">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<legend class="md-subhead">G.  COMPONENTE ECONÓMICO – PRODUCTIVO</legend>
				<div class="col-xm-12 col-sm-12 col-md-12">
					<legend class="md-subhead">Actividades económicas</legend>
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<md-switch ng-model="Encuesta.actividadeco1" aria-label="Agrícolas" class="md-primary">
								Agrícolas
							</md-switch>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.actividadeco1">
							<div class="row">
								<div class="col-xm-12 col-sm-12 col-md-12">
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-input-container class="md-block">
											<label>Cantidad de predios <small>(Máximo 30)</small></label>
											<input type="text" id="cantidaPredios" class="cantidaPredios" name="cantidaPredios"  ng-model="cantidaPredios" ng-change="generatePredios(cantidaPredios)" max="30" required>
										</md-input-container>
									</div>
								</div>
								<md-content class="md-padding">
									<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
										<md-tab ng-repeat="predio in predios"
										ng-disabled="tab.disabled"
										label="Predio {{predio + 1}}">
										<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
											<div ng-bind="tab.content">{{predio}}</div>
											<?php $this->load->view('template/home/form3-agricola'); ?>
										</div>
									</md-tab>
								</md-tabs>
							</md-content>
							<div class="margin-checkbox"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-12">
						<md-switch ng-model="Encuesta.actividadeco2" aria-label="Pecuarias" class="md-primary">
							Pecuarias
						</md-switch>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.actividadeco2">
						<div class="row">
							<div class="col-xm-12 col-sm-12 col-md-12">
								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label>Cantidad de Especies Pecuarias <small>(Máximo 30)</small></label>
										<input type="text" id="cantidaPecuaria" class="cantidaPecuaria" name="cantidaPecuaria" ng-model="cantidaPecuaria" ng-change="generatePecuaria(cantidaPecuaria)" max="30" required>
									</md-input-container>
								</div>
							</div>
							<md-content class="md-padding">
								<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
									<md-tab ng-repeat="pecuario in pecuarios"
									ng-disabled="tab.disabled"
									label="Especie {{pecuario + 1}}">
									<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
										<div ng-bind="tab.content">{{pecuario}}</div>
										<?php $this->load->view('template/home/form3-pecuaria'); ?>
									</div>
								</md-tab>
							</md-tabs>
						</md-content>
						<div class="margin-checkbox"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-switch ng-model="Encuesta.actividadeco3" aria-label="Caza y recolección" class="md-primary">
						Caza, recolección y Explotación
					</md-switch>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.actividadeco3">
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<div class="col-xm-12 col-sm-4 col-md-4">
								<md-input-container class="md-block">
								<label>Cantidad de actividades <small>(Máximo 30)</small></label>
									<input type="text" id="cantidaExplotacion" class="cantidaExplotacion" name="cantidaExplotacion" ng-model="cantidaExplotacion" ng-change="generateExplotacion(cantidaExplotacion)" max="30" required>
								</md-input-container>
							</div>
						</div>
						<md-content class="md-padding">
							<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
								<md-tab ng-repeat="explotacion in explotaciones"
								ng-disabled="tab.disabled"
								label="Actividad {{explotacion + 1}}">
								<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
									<div ng-bind="tab.content">{{explotacion}}</div>
									<?php $this->load->view('template/home/form3-explotacion'); ?>
								</div>
							</md-tab>
						</md-tabs>
					</md-content>
					<div class="margin-checkbox"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</form>
<md-button class="md-raised md-primary" ng-disabled="!Form3.$valid" ng-click="saveForm1('form4', 'menu-tab4')">
	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar y continuar
</md-button>