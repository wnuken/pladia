<form id="Form3" name="Form4">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<legend class="md-subhead">H.  ORGANIZACIÓN Y POLÍTICA</legend>

				<div class="col-xm-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-input-container class="md-block">
								<label>¿Cuántos años lleva en la región?</label>
								<md-select ng-model="Encuesta.cuantosAniosRegion" required>
									<md-option value="1">Menos de 5 años</md-option>
									<md-option value="2">De 6 a 15 años</md-option>
									<md-option value="3">De 16 a 25 años</md-option>
									<md-option value="4">Más de 25 años</md-option>
								</md-select>
							</md-input-container>
						</div>
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.AfiliadoJunta" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								¿Está afiliado a la Junta de Acción Comunal?
							</md-switch>
						</div>
						<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.AfiliadoJunta == 1">
							<md-input-container class="md-block">
								<label>Desde que año?</label>
								<input type="text" ng-model="Encuesta.proyProFuncionaPorque" class="datepickeryear" is-dateyear required>
							</md-input-container>
						</div>

					</div>
				</div>
				<legend>¿Qué organizaciones sociales, campesinas, indígenas, productivas existen en la región?</legend>
				<div class="col-xm-12">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgVivienda" aria-label="Empleado en el sector oficial" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Vivienda
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgVivienda == 1">
								<label>Cuáles</label>
								<input type="text" ng-model="Encuesta.orgViviendaCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgProductores" aria-label="Empleado de sector privado" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Productores
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgProductores == 1">
								<label>Cuáles</label>
								<input type="text" ng-model="Encuesta.orgProductoresCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgCampesinos" aria-label="Propietario empresa o negocio" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Campesinos
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgCampesinos == 1">
								<label>Cuáles</label>
								<input type="text" ng-model="Encuesta.orgCampesinosCual" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgDerechosHumanos" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Derechos Humanos
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgDerechosHumanos == 1">
								<label>Cuales?</label>
								<input type="text" ng-model="Encuesta.orgDerechosHumanosCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgMujeres" aria-label="Siembra de cultivos" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Mujeres
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgMujeres == 1">
								<label>Cuantas veces?</label>
								<input type="text" ng-model="Encuesta.orgMujeresCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgSalud" aria-label="Actividades agropecuarias" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Salud
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgSalud == 1">
								<label>Cuantas veces?</label>
								<input type="text" ng-model="Encuesta.orgSaludCual" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgJovenes" aria-label="Fabricación y/o comercialización" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Jóvenes
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgJovenes == 1">
								<label>Cuales?</label>
								<input type="text" ng-model="Encuesta.orgJovenesCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgDefenzaT" aria-label="Prestación de servicios" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Defensa del Territorio
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgDefenzaT == 1">
								<label>Cuáles</label>
								<input type="text" ng-model="Encuesta.orgDefenzaTCual" required>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-switch ng-model="Encuesta.orgOtros" aria-label="Otros" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Otros
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.orgOtros == 1">
								<label>Cuáles</label>
								<input type="text" ng-model="Encuesta.orgOtrosCual" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<label>Usted hace parte de  alguna de ellas?</label>
							<md-radio-group ng-model="Encuesta.orgHaceParte" layout="row" required>
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
						</div>

						<div class="col-xm-12 col-sm-8 col-md-8" ng-if="Encuesta.orgHaceParte == 1">
							<md-input-container class="md-block">
								<label>¿Cúal?</label>
								<input type="text" ng-model="Encuesta.orgHaceParteSi" required>
							</md-input-container>
						</div>
						<div class="col-xm-12 col-sm-8 col-md-8" ng-if="Encuesta.orgHaceParte == 2">
							<md-input-container class="md-block">
								<label>¿Por qué no participa?</label>
								<input type="text" ng-model="Encuesta.orgHaceParteNo" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>¿Las organizaciones de la región	han propuesto al gobierno sus iniciativas?</label>
							<md-radio-group ng-model="Encuesta.orgPropuestas" layout="row" required>
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.orgPropuestas == 2">
							<md-input-container class="md-block">
								<label>¿Por qué no participa?</label>
								<input type="text" ng-model="Encuesta.orgPropuestasNo" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿Cuál ha sido la actitud del gobierno frente a las peticiones de las organizaciones?</label>
						<md-select ng-model="Encuesta.ActitudGobiernoPetciones" required>
							<md-option value="1">Se distancia de la propuesta campesina</md-option>
							<md-option value="2">Se limita a informar qué inversiones y acciones viene ejecutando en la región</md-option>
							<md-option value="3">Ha atendido el llamado de los campesinos y ha garantizado soluciones</md-option>
							<md-option value="4">No ha tenido ninguna actitud</md-option>
						</md-select>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿Cuál es el papel que juega la iglesia en la región?</label>
						<md-select ng-model="Encuesta.PapelIglesia" required>
							<md-option value="1">Trabaja con la comunidad en la búsqueda de alternativas regionales</md-option>
							<md-option value="2">Influye en la vida social y política de la región</md-option>
							<md-option value="3">No realiza ningún papel</md-option>
						</md-select>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12">
					<label>¿Milita en algún partido político?</label>
					<md-radio-group ng-model="Encuesta.estaPartidoPolitico" layout="row" required>
						<md-radio-button value="1" class="md-primary">Si</md-radio-button>
						<md-radio-button value="2" class="md-primary">No</md-radio-button>
					</md-radio-group>
					<div class="margin-checkbox"></div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12">
					<label>¿Usted o algún miembro de su hogar pertenece  a algún pueblo indígena o comunidad negra?</label>
					<md-radio-group ng-model="Encuesta.miembroindigena" layout="row" required>
						<md-radio-button value="1" class="md-primary">Si</md-radio-button>
						<md-radio-button value="2" class="md-primary">No</md-radio-button>
					</md-radio-group>
					<div class="margin-checkbox"></div>
				</div>
				<div ng-if="Encuesta.miembroindigena == 1">
					<div class="col-xm-12 col-sm-12 col-md-12">
						<md-input-container class="md-block">
							<label> ¿A qué, pueblo indígena o comunidad  negra PERTENECE?</label>
							<input type="text" ng-model="Encuesta.puebloindigena" required>
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>¿Habla o entiende su lengua?</label>
						<md-radio-group ng-model="Encuesta.lenguaindigena" layout="row" required>
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label> ¿Qué lengua es?</label>
							<input type="text" ng-model="Encuesta.lenguaindigenacual" ng-required="Encuesta.lenguaindigena == 1" ng-disabled="Encuesta.lenguaindigena == 2">
						</md-input-container>
					</div>

					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>¿Conserva las tradiciones y cultura de su pueblo o comunidad?</label>
						<md-radio-group ng-model="Encuesta.culturaindigena" layout="row" required>
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>¿Que tradiciones, ritos, creencias, etc.?</label>
							<input type="text" ng-model="Encuesta.culturaindigenacual" ng-required="Encuesta.culturaindigena == 1" ng-disabled="Encuesta.culturaindigena == 2">
						</md-input-container>
					</div>

					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>Vivienda con características tradicionales su comunidad?</label>
						<md-radio-group ng-model="Encuesta.viviendaindigena" layout="row" required>
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>¿Qué tipo de vivienda es?</label>
							<input type="text" ng-model="Encuesta.viviendaindigenacual" ng-required="Encuesta.viviendaindigena == 1" ng-disabled="Encuesta.viviendaindigena == 2">
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>¿Cuál es la principal actividad económica de su pueblo  o comunidad?</label>
							<input type="text" ng-model="Encuesta.principalactividadindigena" required>
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>Principal forma de propiedad de la tierra en la comunidad</label>
							<input type="text" ng-model="Encuesta.principalpropiedadindigena" required>
						</md-input-container>
					</div>

					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>¿En su pueblo o comunidad se practica la medicina tradicional?</label>
						<md-radio-group ng-model="Encuesta.medicinaindigena" layout="row" required>
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>Demanda en materia de derechos, de la comunidad</label>
							<input type="text" ng-model="Encuesta.derechosindigena">
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>Organización actual de su pueblo o comunidad</label>
							<input type="text" ng-model="Encuesta.organizacionindigena" required>
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>¿Es respetada por las personas que no pertenecen  a su pueblo o comunidad?</label>
						<md-radio-group ng-model="Encuesta.respetoindigena" layout="row" required>
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
					</div>
				</div>
				
				<div class="col-xm-12 col-sm-12 col-md-12">
					<label>Tiene alguna relación con los países vecinos?</label>
					<md-radio-group ng-model="Encuesta.relacionPaises" layout="row" required>
						<md-radio-button value="1" class="md-primary">Si</md-radio-button>
						<md-radio-button value="2" class="md-primary">No</md-radio-button>
					</md-radio-group>
				</div>

				<div ng-if="Encuesta.relacionPaises == 1">
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>¿Con cuales países vecinos tiene relación?</label>
							<input type="text" ng-model="Encuesta.organizacionindigena" required>
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-6 col-md-6">
						<md-input-container class="md-block">
							<label>¿Qué relaciones tiene con el país vecino?</label>
							<md-select ng-model="Encuesta.RelacionEcuador" required>
								<md-option value="1">Tengo familia</md-option>
								<md-option value="2">Hago Comercio en la frontera</md-option>
								<md-option value="3">Mis hijos estudian en las escuelas ecuatorianas</md-option>
								<md-option value="4">Tengo negocio / propiedades</md-option>
								<md-option value="5">Exporto mi producción</md-option>
								<md-option value="6">Ninguna</md-option>
							</md-select>
						</md-input-container>
					</div>
				</div>


				
			</div>
		</div>
	</div>
</form>
<md-button class="md-raised md-primary" ng-disabled="!Form4.$valid" ng-click="saveForm1('form5', 'menu-tab5')">
	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar y continuar
</md-button>