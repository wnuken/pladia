<div ng-app="pladiaApp" ng-controller="ReportesController">
	<div class="row">
		<div lass="col-xm-12 col-sm-12 col-md-12">
			<div class="ui-grid-cell-contents">
				<legend>
					<md-button class="btn1 md-raised md-primary" ng-click="exportExcel();">
						<i class="glyphicon glyphicon-download md-button-padia-ico"></i> 
						Descargar Reporte
					</md-button>
				</legend>
			</div>
		</div>
		<div class="col-xm-12 col-sm-12 col-md-12">
			<div ui-grid="gridOptions" class="myGrid"></div>
		</div>
		<div class="col-xm-12 col-sm-12 col-md-12">
			<div id="exportTable" class="table-responsive">
				<table>
					<tr>
						<th>{{titles.code}}</th>
						<th>{{titles.encuenstado}}</th>
						<th>{{titles.telefono}}</th>
						<th>{{titles.recolector}}</th>
						<th>{{titles.supervisor}}</th>
						<th>{{titles.departamento}}</th>
						<th>{{titles.municipio}}</th>
						<th>{{titles.corregimiento}}</th>
						<th>{{titles.sectorrural}}</th>
						<th>{{titles.resguardo}}</th>
						<th>{{titles.nomcomunidad}}</th>
						<th>{{titles.totalhogares}}</th>
						<th>{{titles.numerohogar}}</th>
						<th>{{titles.inundaciones}}</th>
						<th>{{titles.avalanchas}}</th>
						<th>{{titles.desbodamientos}}</th>
						<th>{{titles.deslizamientos}}</th>
						<th>{{titles.vendavales}}</th>
						<th>{{titles.otrodesastre}}</th>
						<th>{{titles.supervisor}}</th>
					</tr>
					<tr ng-repeat="report in gridOptions.data">
						<th>{{report.idform}}</th>
						<td>{{report.nombreencuestado}}</td>
						<td>{{report.telefonoencuestado}}</td>
						<td>{{report.nombrerecolector}}</td>
						<td>{{report.nombresupervisor}}</td>
						<td>{{report.departamento}}</td>
						<td>{{report.municipio}}</td>
						<td>{{report.corregimiento}}</td>
						<td>{{report.sectorrural}}</td>
						<td>{{report.resguardo}}</td>
						<td>{{report.nomcomunidad}}</td>
						<td>{{report.totalhogares}}</td>
						<td>{{report.numerohogar}}</td>
						<td>{{report.inundaciones}}</td>
						<td>{{report.avalanchas}}</td>
						<td>{{report.desbodamientos}}</td>
						<td>{{report.deslizamientos}}</td>
						<td>{{report.vendavales}}</td>
						<td>{{report.otrodesastre}}</td>
						<td>{{report.nombresupervisor}}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>