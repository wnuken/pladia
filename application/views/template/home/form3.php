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
									<md-input-container class="md-block">
										<label>Cantidad de predios <small>(Máximo 30)</small></label>
										<input type="text" ng-model="cantidaPredios" ng-change="generatePredios(cantidaPredios)" max="30" required>
									</md-input-container>
								</div>

								<md-content class="md-padding">
									<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
										<md-tab ng-repeat="predio in predios"
										ng-disabled="tab.disabled"
										label="Predio {{predio + 1}}">
										<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
											<div ng-bind="tab.content">{{predio}}</div>

											<h3>Predio {{(predio + 1)}}</h3>
											<div class="row">
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

														</md-tab>
													</md-tabs>
												</md-content>
											</div>
										</div>
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

				</div>
			</div>
			<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-switch ng-model="Encuesta.actividadeco3" aria-label="Caza y recolección" class="md-primary">
						Caza y recolección
					</md-switch>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.actividadeco3">

				</div>
			</div>
			<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-switch ng-model="Encuesta.actividadeco4" aria-label="Explotación" class="md-primary">
						Explotación
					</md-switch>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.actividadeco4">

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