<div ng-app="pladiaApp" ng-controller="ReportesController">
	<div class="row">
		<div lass="col-xm-12 col-sm-12 col-md-12">
			<div class="ui-grid-cell-contents">
				<legend>
					<md-button class="btn1 md-raised md-primary" ng-click="download();">
						<i class="glyphicon glyphicon-download md-button-padia-ico"></i> 
						Descargar Reporte
					</md-button>
				</legend>
			</div>
		</div>
		<div class="col-xm-12 col-sm-12 col-md-12">
			<div ui-grid="gridOptions" class="myGrid"></div>
		</div>
	</div>
</div>