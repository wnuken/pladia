<form id="Form5" name="Form5">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-input-container class="md-block">
						<label>Total de personas en el hogar <small>(Máximo 30)</small></label>
						<input type="text" ng-model="Encuesta.totalpersonas" required ng-change="generateForm4(Encuesta.totalpersonas)" max="30">
						<md-tooltip md-direction="top">
							La pestaña de caracteristicas generales depende del numero de personas en este campo
						</md-tooltip>
					</md-input-container>
				</div>
				<md-content class="md-padding">
					<md-tabs md-selected="selectedIndex" md-border-bottom md-dynamic-height >
						<md-tab ng-repeat="sen in senForm4"
						ng-disabled="tab.disabled"
						label="Persona {{sen + 1}}">
						<div class="demo-tab tab{{$index%4}}" style="padding: 25px;">
							<div ng-bind="tab.content">{{sen}}</div>
							<legend class="md-subhead">H. CARACTERÍSTICAS GENERALES</legend>
							<br/>
							<legend>Persona {{sen + 1}}</legend>
							<div class="col-xm-12 col-sm-12 col-md-12">
								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label>Nombre(s) y apellido(s) de la persona</label>
										<input type="text" ng-model="Encuesta.presona[sen]['nombre']" required>
									</md-input-container>
								</div>
								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label>Número de orden de la persona </label>
										<input type="text" ng-init="Encuesta.presona[sen].numero = (sen + 1)" ng-model="Encuesta.presona[sen]['numero']" required>
									</md-input-container>
								</div>
								<div class="col-xm-12 col-sm-4 col-md-4">
									<label>Sexo</label>
									<md-radio-group ng-model="Encuesta.presona[sen]['sexo']" layout="row" required>
										<md-radio-button value="1" class="md-primary">Hombre</md-radio-button>
										<md-radio-button value="2" class="md-primary">Mujer</md-radio-button>
									</md-radio-group>
								</div>
							</div>
							<div class="col-xm-12 col-sm-4 col-md-4">
								<md-input-container class="md-block">
									<label>¿Cuál es su orientación sexual?</label>
									<md-select ng-model="Encuesta.presona[sen]['sexualidad']" required>
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
									<input type="text" ng-model="Encuesta.presona[sen]['edad']" 
									class="datepicker" is-date readonly required
									ng-change="validateEdad(Encuesta.presona[sen]['edad'], sen)">
								</md-input-container>
							</div>
							<div class="col-xm-12 col-sm-4 col-md-4">
								<md-input-container class="md-block">
									<label>Posición en el hogar</label>
									<md-select ng-model="Encuesta.presona[sen]['posicion']" required>
										<md-option value="1" ng-if="FinalDate[sen] > 10">Jefe (a) del hogar</md-option>
										<md-option value="2">Pareja, esposo(a), cónyuge, compañero(a)</md-option>
										<md-option value="3">Hijo(a), hijastro(a)</md-option>
										<md-option value="4">Nieto(a)</md-option>
										<md-option value="5">Otro  pariente</md-option>
										<md-option value="6">Empleado(a) del servicio doméstico y sus parientes</md-option>
										<md-option value="7">Pensionista</md-option>
										<md-option value="8">Trabajador</md-option>
										<md-option value="9">Otro no pariente</md-option>
									</md-select>
								</md-input-container>
							</div>
							<div ng-if="FinalDate[sen] > 10" class="col-xm-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-xm-12 col-sm-6 col-md-6">
										<md-input-container class="md-block">
											<label>Situación sentimental actual</label>
											<md-select ng-model="Encuesta.presona[sen]['sentimental']" required>
												<md-option value="1">No esta casado(a) y vive en pareja hace menos de 2 años</md-option>
												<md-option value="2">No esta casado(a) y vive en pareja hace 2 años o más</md-option>
												<md-option value="3">Esta casado (a)</md-option>
												<md-option value="4">Esta separado (a) o divorciado (a)</md-option>
												<md-option value="5">Esta viudo (a)</md-option>
												<md-option value="6">Esta soltero (a)</md-option>
											</md-select>
										</md-input-container>
									</div>
									<div class="col-xm-12 col-sm-6 col-md-6">
										<md-input-container class="md-block">
											<label>Etnia</label>
											<md-select ng-model="Encuesta.presona[sen]['etnia']" required>
												<md-option value="1">Afrodescendiente</md-option>
												<md-option value="2">Población Raizal</md-option>
												<md-option value="3">Pueblos Indígenas</md-option>
												<md-option value="4">Rom o gitano</md-option>
												<md-option value="5">Mestizo</md-option>
												<md-option value="6">Ninguna de las anteriores</md-option>
											</md-select>
										</md-input-container>
									</div>
									<div class="col-xm-12 col-sm-6 col-md-6">
										<label>Victima de conficto armado</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['conflicto']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
									<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['conflicto'] == 1">
										<md-input-container class="md-block">
											<label>Clase de victima</label>
											<md-select ng-model="Encuesta.presona[sen]['clasevictima']" required>
												<md-option value="1">Abandono o despojo de tierras</md-option>
												<md-option value="2">Actos terroristas</md-option>
												<md-option value="3">Amenaza</md-option>
												<md-option value="4">Desaparición forzada</md-option>
												<md-option value="5">Homicidio</md-option>
												<md-option value="6">Secuestro</md-option>
												<md-option value="7">Tortura</md-option>
												<md-option value="8">Desplazamiento</md-option>
											</md-select>
										</md-input-container>
									</div>

								</div>
								
							</div>
							<div class="margin-checkbox"></div>
							<div class="row">
								<legend class="md-subhead">I. MINERO ENERGÉTICA</legend>
								<div class="col-xm-12 col-sm-6 col-md-6">
									<label>¿Conoce de explotaciones mineras en la región?</label>
									<md-radio-group ng-model="Encuesta.presona[sen]['minera']" layout="row" required>
										<md-radio-button value="1" class="md-primary">Si</md-radio-button>
										<md-radio-button value="2" class="md-primary">No</md-radio-button>
									</md-radio-group>
								</div>
								<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['minera'] == 1">
									<md-input-container class="md-block">
										<label>Tipo de explotación minera</label>
										<md-select ng-model="Encuesta.presona[sen]['tipominera']" required>
											<md-option value="1">Carbón</md-option>
											<md-option value="2">Caliza</md-option>
											<md-option value="3">Coltan</md-option>
											<md-option value="4">Oro</md-option>
											<md-option value="5">Yeso</md-option>
											<md-option value="6">Estaño</md-option>
											<md-option value="7">Otra</md-option>
										</md-select>
									</md-input-container>
								</div>

								<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['minera'] == 1 && Encuesta.presona[sen]['tipominera'] == 7">
									<md-input-container class="md-block">
										<label>¿Cúal?</label>
										<input type="text" ng-model="Encuesta.presona[sen]['tipomineraotra']" required>
									</md-input-container>
								</div>

								<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['minera'] == 1">
									<label>¿Conoce de explotaciones mineras en la región?</label>
									<md-radio-group ng-model="Encuesta.presona[sen]['conoceminera']" layout="row" required>
										<md-radio-button value="1" class="md-primary">Si</md-radio-button>
										<md-radio-button value="2" class="md-primary">No</md-radio-button>
									</md-radio-group>
								</div>

								<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['minera'] == 1">
									<md-input-container class="md-block">
										<label>¿Cómo actuan las empresas dedicadas a la acción minera</label>
										<md-select ng-model="Encuesta.presona[sen]['opinionminera']" required>
											<md-option value="1">Excelente, contribuyen al desarrollo de la región</md-option>
											<md-option value="2">Buena, traen riqueza pero se benefician unos pocos</md-option>
											<md-option value="3">Regular, concentran su producción y dañan el ambiente</md-option>
											<md-option value="4">Mala, son nocivas para el ambiente,  deterioran la calidad de vida, se llevan los recursos</md-option>
											<md-option value="5">Pésima, acaban con todo</md-option>
										</md-select>
									</md-input-container>
								</div>

							</div>

							<div class="row">
								<br>
								<div class="col-xm-12 col-sm-12 col-md-12">
									<label>Califique de 1 a 10 la atención del gobierno a temas ambientales</label>
								</div>
								<div class="col-xm-12 col-sm-6 col-md-6">
									<md-slider-container>
										<div flex="10" layout layout-align="center center">
											<span class="md-body-1">
												<md-input-container>
													<input flex type="text" ng-model="Encuesta.presona[sen]['califique']" aria-label="blue" aria-controls="blue-slider" readonly>
												</md-input-container>
											</span>
										</div>
										<md-slider flex md-discrete ng-model="Encuesta.presona[sen]['califique']" step="1" min="1" max="10" aria-label="rating" class="md-primary">
										</md-slider>

									</md-slider-container>
								</div>
							</div>

							<div class="row">
								<legend class="md-subhead">J. SALUD</legend>
								<div class="col-xm-12 col-sm-6 col-md-6">
									<md-input-container class="md-block">
										<label>está afiliado,  es cotizante o es beneficiario en Salud (EPS - ARS)</label>
										<md-select ng-model="Encuesta.presona[sen]['cotizasalud']" required>
											<md-option value="1">Si</md-option>
											<md-option value="2">No</md-option>
											<md-option value="9">No sabe no responde</md-option>
										</md-select>
									</md-input-container>
								</div>
								<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['cotizasalud'] == 1">
									<md-input-container class="md-block">
										<label>A que regimen de salud pertenece</label>
										<md-select ng-model="Encuesta.presona[sen]['saludtipo']" required>
											<md-option value="1">Contributivo  (EPS)</md-option>
											<md-option value="2">Especial (Fuerzas Armadas, Ecopetrol, universidades públicas)</md-option>
											<md-option value="3">Subsidiado (EPS-S)</md-option>
											<md-option value="9">No sabe, no informa</md-option>
										</md-select>
									</md-input-container>
								</div>
								<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.presona[sen]['cotizasalud'] == 2">
									<md-input-container class="md-block">
										<label>Tipo de explotación minera</label>
										<md-select ng-model="Encuesta.presona[sen]['saludnocubre']" required>
											<md-option value="1">Falta de dinero</md-option>
											<md-option value="2">No esta vinculado laboralmente</md-option>
											<md-option value="3">Muchos tramites</md-option>
											<md-option value="4">No le interesa, descuido</md-option>
											<md-option value="5">Desvinculación del SISBEN</md-option>
											<md-option value="6">Perdió el trabajo</md-option>
										</md-select>
									</md-input-container>
								</div>
							</div>
							<div ng-if="FinalDate[sen] > 3">
								<div class="row">
									<legend class="md-subhead">K. EDUCACIÓN</legend>
									<div class="col-xm-12 col-sm-4 col-md-4">
										<label>¿Sabe leer y escribir?</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['leerescribir']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
									<div class="col-xm-12 col-sm-4 col-md-4">
										<label>¿asiste al preescolar, escuela, colegio o universidad?</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['asisteeduca']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
									<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['asisteeduca'] == 1">
										<label>El establecimiento al que asiste.... ¿es oficial?</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['oficialeduca']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
								</div>
								<div class="margin-checkbox"></div>
								<div class="row">
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-input-container class="md-block">
											<label>Nivel educativo</label>
											<md-select ng-model="Encuesta.presona[sen]['tipominera']" required>
												<md-option value="1">Ninguno</md-option>
												<md-option value="2">Preescolar</md-option>
												<md-option value="3">Básica primaria (1o - 5o)</md-option>
												<md-option value="4">Básica secundaria (6o - 9o)</md-option>
												<md-option value="5">Media (10o - 13o)</md-option>
												<md-option value="6">Superior o universitaria</md-option>
												<md-option value="7">No sabe, no informa</md-option>
											</md-select>
										</md-input-container>
									</div>
									<div class="col-xm-12 col-sm-4 col-md-4">
										<label>tomas algún transporte para dirigirse a la institución educativa</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['transporteeduca']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
									<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['transporteeduca'] == 1">
										<label>El transporte es subsidiado</label>
										<md-radio-group ng-model="Encuesta.presona[sen]['transporteeducasubsidio']" layout="row" required>
											<md-radio-button value="1" class="md-primary">Si</md-radio-button>
											<md-radio-button value="2" class="md-primary">No</md-radio-button>
										</md-radio-group>
									</div>
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-input-container class="md-block">
											<label>medio de trasporte utilizado</label>
											<md-select ng-model="Encuesta.presona[sen]['transporteeducatipo']" required>
												<md-option value="1">A pie</md-option>
												<md-option value="2">En cicla</md-option>
												<md-option value="3">En moto</md-option>
												<md-option value="4">Vehículo particular</md-option>
												<md-option value="5">Transporte publico</md-option>
											</md-select>
										</md-input-container>
									</div>
								</div>
							</div>
							<div class="margin-checkbox"></div>
							<div class="row" ng-if="FinalDate[sen] > 10">
								<legend class="md-subhead">L. FUERZA DE TRABAJO E INGRESOS</legend>
								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label> ¿En que actividad ocupó la mayor parte del tiempo la semana pasada?</label>
										<md-select ng-model="Encuesta.presona[sen]['actividadtrabajo']" required>
											<md-option value="1">Trabajando</md-option>
											<md-option value="2">Buscando trabajo</md-option>
											<md-option value="3">Estudiando</md-option>
											<md-option value="4">Oficios del hogar</md-option>
											<md-option value="5">Incapacitado permanente para trabajar</md-option>
											<md-option value="6">Otra actividad</md-option>
										</md-select>
									</md-input-container>
								</div>

								<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['actividadtrabajo'] == 6">
									<md-input-container class="md-block">
										<label>¿Cúal?</label>
										<input type="text" ng-model="Encuesta.presona[sen]['actividadtrabajocual']" required>
									</md-input-container>
								</div>

								<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['actividadtrabajo'] > 1">
									<label>Aunque no tiene trabajo, recibe algún ingreso</label>
									<md-radio-group ng-model="Encuesta.presona[sen]['ingresostrabajo']" layout="row" required>
										<md-radio-button value="1" class="md-primary">Si</md-radio-button>
										<md-radio-button value="2" class="md-primary">No</md-radio-button>
									</md-radio-group>
								</div>

								<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.presona[sen]['actividadtrabajo'] == 1 || Encuesta.presona[sen]['ingresostrabajo'] == 1">
									<md-input-container class="md-block">
										<label>Rango de ingresos</label>
										<md-select ng-model="Encuesta.presona[sen]['rangoingresostrabajo']" required>
											<md-option value="2">Menos de $350.000</md-option>
											<md-option value="3">Entre $350.000 y menos de $700.000</md-option>
											<md-option value="4">Entre $700.000 y menos de $1.400.000</md-option>
											<md-option value="5">Mas de $1.400.000</md-option>
										</md-select>
									</md-input-container>
								</div>

							</div>

						</div>
					</md-tab>
				</md-tabs>
			</md-content>
		</div>
	</div>
</div>
</form>

<md-button class="md-raised md-primary" ng-disabled="!Form5.$valid" ng-click="saveForm1('form6', 'menu-tab6')">
	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar y finalizar
</md-button>