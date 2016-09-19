<form id="Form2" name="Form2">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<legend class="md-subhead">D. DATOS DEL HOGAR</legend>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿Cuántas personas componen su hogar?</label>
						<input type="text" ng-model="Encuesta.cuantaspersonas1" required>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>Incluyendo sala-comedor ¿de cuántos cuartos en total dispone su hogar?</label>
						<input type="text" ng-model="Encuesta.cuartos" required>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿En cuántos de esos cuartos  duermen las personas de su hogar?</label>
						<input type="text" ng-model="Encuesta.habitaciones" required>
					</md-input-container>
				</div>

				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿Cómo eliminan principalmente la basura en su hogar?</label>
						<md-select ng-model="Encuesta.basura" required>
							<md-option value="1">Por recolección pública o privada</md-option>
							<md-option value="2">La tiran a un río, quebrada o laguna</md-option>
							<md-option value="3">La tiran a un lote, zanja o baldío</md-option>
							<md-option value="4">La queman o entierran</md-option>
							<md-option value="5">La eliminan de otra forma</md-option>
						</md-select>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12"></div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<label>¿De qué actividades provienen las basuras de su hogar?</label>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.basuraActividad1" aria-label="Domesticas" class="md-primary" value="1">
									Domesticas
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraActividad2" aria-label="Comerciales" class="md-primary" value="1">
									Comerciales
								</md-checkbox>
							</md-checkbox-container>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.basuraActividad3" aria-label="Agropecuarias" class="md-primary" value="1">
									Agropecuarias
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraActividad4" aria-label="Otra" class="md-primary" value="1">
									Otra
								</md-checkbox>
							</md-checkbox-container>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-12">
							<md-input-container class="md-block" ng-if="Encuesta.basuraActividad4">
								<label>¿Cual?</label>
								<input type="text" ng-model="Encuesta.basuraActividad4Cual" required>
							</md-input-container>
						</div>
					</div>
				</div>
				<div class="col-xm-12 col-sm-6 col-md-6">
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<label>¿Cómo separa sus basuras?</label>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.basuraPrepara1" aria-label="Domesticas" class="md-primary" value="1">
									Orgánicos (residuos de cocina)
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraPrepara2" aria-label="Comerciales" class="md-primary" value="1">
									Inorgánicos (bolsas, latas, etc)
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraPrepara3" aria-label="Agropecuarias" class="md-primary" value="1">
									Papel y cartón
								</md-checkbox>
							</md-checkbox-container>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.basuraPrepara4" aria-label="Otra" class="md-primary" value="1">
									Metal
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraPrepara5" aria-label="Otra" class="md-primary" value="1">
									Vidrio
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.basuraPrepara6" aria-label="Otra" class="md-primary" value="1">
									Plástico
								</md-checkbox>
							</md-checkbox-container>
						</div>
					</div>
				</div>

				<div class="col-xm-12 col-sm-12 col-md-12"></div>

				<div class="col-xm-12 col-sm-4 col-md-4">
					<md-input-container class="md-block">
						<label>La vivienda ocupada por su hogar es</label>
						<md-select ng-model="Encuesta.modovivienda" required>
							<md-option value="1">Propia</md-option>
							<md-option value="2">En arriendo o subarriendo</md-option>
							<md-option value="3">En usufructo</md-option>
							<md-option value="4">Posesión sin titulo</md-option>
							<md-option value="5">Otra</md-option>
						</md-select>
					</md-input-container>
				</div>

				<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.modovivienda == 1">
					<label>Algún miembro de este hogar tiene  escritura registrada de la vivienda</label>
					<md-switch ng-model="Encuesta.escritura" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">

					</md-switch>
				</div>

				<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.modovivienda == 1 && Encuesta.escritura == 1">
					<label>La escritura está a nombre de</label>
					<div class="form-group">
						<md-checkbox ng-model="Encuesta.propiajefe" aria-label="Jefe(a) del hogar" class="md-primary" value="1">
							Jefe(a) del hogar
						</md-checkbox>
						<md-checkbox ng-model="Encuesta.propiaconyuge" aria-label="Cónyuge" class="md-primary" value="1">
							Cónyuge
						</md-checkbox>
						<md-checkbox ng-model="Encuesta.propiahijos" aria-label="Hijos" class="md-primary" value="1">
							Hijos
						</md-checkbox>
						<md-checkbox ng-model="Encuesta.propiaotros" aria-label="Otras personas del hogar" class="md-primary" value="1">
							Otras personas del hogar 
						</md-checkbox>
					</div>
				</div>

				<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.modovivienda == 2">
					<md-input-container class="md-block">
						<label>¿Cuánto pagan mensualmente de arriendo?</label>
						<input type="text" ng-model="Encuesta.arriendo" required>
					</md-input-container>
				</div>

				<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.modovivienda == 5">
					<md-input-container class="md-block">
						<label>¿Cúal?</label>
						<input type="text" ng-model="Encuesta.modoviviendaotra" required>
					</md-input-container>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12"></div>


				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>¿Su hogar en cuáles de los siguiente lugares  prepara los alimentos?</label>
						<md-select ng-model="Encuesta.dondecocina" required>
							<md-option value="1">En un cuarto usado solo para cocinar</md-option>
							<md-option value="2">En un cuarto usado también para dormir</md-option>
							<md-option value="3">En una sala comedor con lavaplatos</md-option>
							<md-option value="4">En una sala comedor sin lavaplatos</md-option>
							<md-option value="5">En un patio, corredor, enramada, al aire libre</md-option>
							<md-option value="6">En ninguna parte, no preparan alimentos</md-option>
						</md-select>
					</md-input-container>
				</div>


				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>El agua para preparar los alimentos la obtienen principalmente de:</label>
						<md-select ng-model="Encuesta.dondeagua" required>
							<md-option value="1">Acueducto público</md-option>
							<md-option value="2">Acueducto comunal o veredal.</md-option>
							<md-option value="3">Pozo con bomba</md-option>
							<md-option value="4">Pozo sin bomba, jagüey</md-option>
							<md-option value="5">Agua lluvia</md-option>
							<md-option value="6">Río, quebrada, manantial o nacimiento</md-option>
							<md-option value="7">Pila pública, aguatero</md-option>
						</md-select>
					</md-input-container>
				</div>

				<div class="col-xm-12 col-sm-6 col-md-6">
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<label>¿ En que actividades usa el agua de la vivienda?</label>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.aguaActividad1" aria-label="Domesticas" class="md-primary" value="1">
									Domesticas
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.aguaActividad2" aria-label="Comerciales" class="md-primary" value="1">
									Agrícolas
								</md-checkbox>
							</md-checkbox-container>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-checkbox-container class="block">
								<md-checkbox ng-model="Encuesta.aguaActividad3" aria-label="Agropecuarias" class="md-primary" value="1">
									Pecuarias
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.aguaActividad4" aria-label="Otra" class="md-primary" value="1">
									Otra
								</md-checkbox>
							</md-checkbox-container>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-12">
							<md-input-container class="md-block" ng-if="Encuesta.aguaActividad4">
								<label>¿Cual?</label>
								<input type="text" ng-model="Encuesta.aguaActividad4Cual" required>
							</md-input-container>
						</div>
					</div>
				</div>


				<div class="col-xm-12 col-sm-6 col-md-6">
					<md-input-container class="md-block">
						<label>El servicio sanitario que utiliza el hogar es:</label>
						<md-select ng-model="Encuesta.sanitario" required>
							<md-option value="1">Inodoro conectado a alcantarillado</md-option>
							<md-option value="2">Inodoro conectado a pozo séptico</md-option>
							<md-option value="3">Inodoro sin conexión</md-option>
							<md-option value="4">Letrina</md-option>
							<md-option value="5">Bajamar</md-option>
							<md-option value="6">No tiene servicio sanitario </md-option>
						</md-select>
					</md-input-container>
				</div>


			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<legend class="md-subhead">E. SEGURIDAD ALIMENTARIA</legend>

				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-input-container class="md-block">
						<label>Cuáles son los principales alimentos incluidos en su alimentación?</label>
						<textarea name="princialalimento" ng-model="Encuesta.princialalimento" required md-maxlength="500" maxlength="500" required></textarea>
						<div ng-messages="Form2.princialalimento.$error" ng-show="Form2.princialalimento.$dirty">
							<div ng-message="required">Este campo es requerido</div>
							<div ng-message="md-maxlength">Demaciado Largo</div>
						</div>
					</md-input-container>
				</div>

				<div class="col-xm-12 col-sm-4 col-md-4">
					<label>Sabe usted que es soberanía alimentaria</label>
					<md-radio-group ng-model="Encuesta.soberaniaalimentaria" layout="row">
						<md-radio-button value="1" class="md-primary">Si</md-radio-button>
						<md-radio-button value="2" class="md-primary">No</md-radio-button>
					</md-radio-group>
				</div>




			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<legend class="md-subhead">F. ASPECTOS ECONÍMCOS</legend>

				<div class="col-xm-12 col-sm-6 col-md-6">
					<label>Es trabajador o propietario de una parcela?</label>
					<md-radio-group ng-model="Encuesta.trabajaparcela" layout="row">
						<md-radio-button value="1" class="md-primary">Si</md-radio-button>
						<md-radio-button value="2" class="md-primary">No</md-radio-button>
					</md-radio-group>
					<div class="margin-checkbox"></div>
				</div>
				<div ng-if="Encuesta.trabajaparcela == 1">

					<div class="col-xm-12 col-sm-6 col-md-6">
						<label>La parcela es:</label>
						<md-radio-group ng-model="Encuesta.rolenparcela" layout="row">
							<md-radio-button value="1" class="md-primary">Propia</md-radio-button>
							<md-radio-button value="2" class="md-primary">Arrendada</md-radio-button>
							<md-radio-button value="3" class="md-primary">Trabaja como agregado</md-radio-button>
						</md-radio-group>
						<div class="margin-checkbox"></div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12"></div>

					<div ng-if="Encuesta.rolenparcela == 1">
						<legend>Propia</legend>
						<div class="col-xm-12 col-sm-12 col-md-12">
							<label>La parcela esta escriturada</label>
							<md-radio-group ng-model="Encuesta.parcelaescritura" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
						</div>
					</div>


					<div ng-if="Encuesta.rolenparcela == 2">
						<legend>Arrendada</legend>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-input-container class="md-block">
								<label>¿Cuánto paga por concepto de arriendo?</label>
								<md-select ng-model="Encuesta.arriendoparcela" required>
									<md-option value="1">Entre 10.000 y 500.000</md-option>
									<md-option value="2">Entre 500.000 y 1.000.000</md-option>
									<md-option value="3">Entre 1.000.000 y 2.000.000</md-option>
									<md-option value="4">Más de 2.000.000</md-option>
								</md-select>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-input-container class="md-block">
								<label>¿Hace cuánto tiempo la tiene arrendada?</label>
								<input type="text" ng-model="Encuesta.parcelaarriendotiempo" required class="datepickermon" is-datemon>
							</md-input-container>
						</div>

					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<div class="margin-checkbox"></div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">

						<md-input-container class="md-block">
							<label>La extensión de la parcela/tierras es de:</label>
							<md-select ng-model="Encuesta.parcelaextension" required>
								<md-option value="1">Menos de 1 hectárea </md-option>
								<md-option value="2">Entre 1 y 5 hectáreas</md-option>
								<md-option value="3">Entre 6 y 15 hectáreas </md-option>
								<md-option value="4">Entre 16 y 30 hectáreas </md-option>
								<md-option value="5">Entre 31 y 50 hectáreas</md-option>
								<md-option value="6">Más de 51 hectáreas</md-option>
							</md-select>
						</md-input-container>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-12">
						<div class="margin-checkbox"></div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-12">
						<legend class="md-subhead">¿Qué propiedades posee?</legend>
						<div class="col-xm-12 col-sm-12 col-md-12">
							<div class="md-block">
								<md-checkbox ng-model="Encuesta.propiedades1" aria-label="Casa" class="md-primary" value="1">
									Casa
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades2" aria-label="Fincas/ tierras" class="md-primary" value="1">
									Fincas/ tierras
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades3" aria-label="Cultivos" class="md-primary" value="1">
									Cultivos
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades4" aria-label="Semovientes" class="md-primary" value="1">
									Semovientes
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades5" aria-label="Maquinaria" class="md-primary" value="1">
									Maquinaria
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades6" aria-label="Herramientas de trabajo" class="md-primary" value="1">
									Herramientas de trabajo
								</md-checkbox>
								<md-checkbox ng-model="Encuesta.propiedades7" aria-label="Otros" class="md-primary" value="1">
									Otros
								</md-checkbox>
							</div>
						</div>

						<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.propiedades7">
							<md-input-container class="md-block">
								<label>Cuales?</label>
								<input type="text" ng-model="Encuesta.propiedadescuales" required>
							</md-input-container>
						</div>

					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<div class="margin-checkbox"></div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-12">
						<legend class="md-subhead">El uso del suelo de la parcela está establecido por</legend>
						<div class="row">
							<div class="col-xm-12 col-sm-12 col-md-12">
								<div class="md-block">
									<md-checkbox ng-model="Encuesta.usuosuelo1" aria-label="Producción agrícola" class="md-primary" value="1">
										Producción agrícola
									</md-checkbox>
									<md-checkbox ng-model="Encuesta.usuosuelo2" aria-label="Producción pecuaria" class="md-primary" value="1">
										Producción pecuaria
									</md-checkbox>
									<md-checkbox ng-model="Encuesta.usuosuelo3" aria-label="Bosques" class="md-primary" value="1">
										Bosques
									</md-checkbox>
									<md-checkbox ng-model="Encuesta.usuosuelo4" aria-label="Otro Usos" class="md-primary" value="1">
										Otro Usos
									</md-checkbox>
								</div>
							</div>
							<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.usuosuelo4">
								<md-input-container class="md-block">
									<label>Cuales?</label>
									<input type="text" ng-model="Encuesta.usoparcelacuales" required>
								</md-input-container>
							</div>
							<div class="margin-checkbox"></div>
						</div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<label>¿Ha sido obligado o presionado a dejar sus tierras y propiedades?</label>
						<md-radio-group ng-model="Encuesta.dejartierra" layout="row">
							<md-radio-button value="1" class="md-primary">Si</md-radio-button>
							<md-radio-button value="2" class="md-primary">No</md-radio-button>
						</md-radio-group>
						<div class="margin-checkbox"></div>
					</div>

					<div ng-if="Encuesta.dejartierra == 1">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<div class="row">
								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label>Cuál ha sido la causa?</label>
										<md-select ng-model="Encuesta.dejatierracausa" required>
											<md-option value="1">El conflicto armado (actores armados)</md-option>
											<md-option value="2"> Ha sido presionado por latifundistas</md-option>
											<md-option value="3">Transnacionales le han querido comprar la tierra</md-option>
											<md-option value="4">Otra</md-option>
										</md-select>
									</md-input-container>
								</div>
								<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.dejatierracausa == 4">
									<md-input-container class="md-block">
										<label>Cuales?</label>
										<input type="text" ng-model="Encuesta.dejatierracausacuales" required>
									</md-input-container>
								</div>

								<div class="col-xm-12 col-sm-4 col-md-4">
									<md-input-container class="md-block">
										<label>¿Hace cuanto tiempo?</label>
										<input type="text" class="datepickermon" ng-model="Encuesta.dejatierracausatiempo" required readonly is-datemon>
									</md-input-container>
								</div>
							</div>
						</div>

					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<div class="row">
							<div class="col-xm-12 col-sm-6 col-md-6">
								<label>¿Ha tenido dificultades para  acceder  a sus propiedades?</label>
								<md-radio-group ng-model="Encuesta.dificultadpro" layout="row">
									<md-radio-button value="1" class="md-primary">Si</md-radio-button>
									<md-radio-button value="2" class="md-primary">No</md-radio-button>
								</md-radio-group>
								<div class="margin-checkbox"></div>
							</div>
							<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.dificultadpro == 1">
								<md-input-container class="md-block">
									<label>De qué tipo?</label>
									<input type="text" ng-model="Encuesta.dificultadprotipo" required>
								</md-input-container>
							</div>
						</div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<div class="row">
							<div class="col-xm-12 col-sm-6 col-md-6">
								<label>¿Ha sido inducido a vender su parcela?</label>
								<md-radio-group ng-model="Encuesta.inducirventa" layout="row">
									<md-radio-button value="1" class="md-primary">Si</md-radio-button>
									<md-radio-button value="2" class="md-primary">No</md-radio-button>
								</md-radio-group>
								<div class="margin-checkbox"></div>
							</div>
							<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.inducirventa == 1">
								<label>¿A quién?</label>
								<md-radio-group ng-model="Encuesta.inducirventaquien" layout="row">
									<md-radio-button value="1" class="md-primary">Gobierno</md-radio-button>
									<md-radio-button value="2" class="md-primary">Transnacionales</md-radio-button>
									<md-radio-button value="3" class="md-primary">Particulares</md-radio-button>
								</md-radio-group>
								<div class="margin-checkbox"></div>
							</div>
						</div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<legend class="md-subhead">¿En su finca, Qué actividades económicas realiza?</legend>
						<div class="row">

							<div class="col-xm-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoCrianza" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Crianza de animales:
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoCrianza == 1">
											<label>Cuales?</label>
											<input type="text" ng-model="Encuesta.actecoCrianzacual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoSiembra" aria-label="Siembra de cultivos" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Siembra de cultivos
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoSiembra == 1">
											<label>Cuales?</label>
											<input type="text" ng-model="Encuesta.actecoSiembracual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoAgro" aria-label="Actividades agropecuarias" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Actividades agropecuarias
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoAgro == 1">
											<label>Cuales?</label>
											<input type="text" ng-model="Encuesta.actecoAgrocual" required>
										</md-input-container>
									</div>
								</div>
							</div>

							<div class="col-xm-12">
								<div class="row">
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoEmpleado" aria-label="Empleado en el sector oficial" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Empleado en el sector oficial
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoEmpleado == 1">
											<label>Cuáles</label>
											<input type="text" ng-model="Encuesta.actecoEmpleadocual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoEmpleadop" aria-label="Empleado de sector privado" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Empleado de sector privado
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoEmpleadop == 1">
											<label>Cuáles</label>
											<input type="text" ng-model="Encuesta.actecoEmpleadopcual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoPropie" aria-label="Propietario empresa o negocio" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Propietario empresa o negocio
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoPropie == 1">
											<label>Cuáles</label>
											<input type="text" ng-model="Encuesta.actecoPropiecual" required>
										</md-input-container>
									</div>
								</div>
							</div>

							<div class="col-xm-12">
								<div class="row">
									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoFabricacion" aria-label="Fabricación y/o comercialización" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Fabricación y/o comercialización
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoFabricacion == 1">
											<label>Cuales?</label>
											<input type="text" ng-model="Encuesta.actecoFabricacioncual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoServicios" aria-label="Prestación de servicios" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Prestación de servicios
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoServicios == 1">
											<label>Cuáles</label>
											<input type="text" ng-model="Encuesta.actecoServicioscual" required>
										</md-input-container>
									</div>

									<div class="col-xm-12 col-sm-4 col-md-4">
										<md-switch ng-model="Encuesta.actecoOtros" aria-label="Otros" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
											Otros
										</md-switch>
										<md-input-container class="md-block" ng-if="Encuesta.actecoOtros == 1">
											<label>Cuáles</label>
											<input type="text" ng-model="Encuesta.actecoOtroscual" required>
										</md-input-container>
									</div>
								</div>
							</div>

						</div>	
					</div>	

					<div class="col-xm-12 col-sm-12 col-md-12">
						<legend class="md-subhead">De los siguientes problemas o limitantes ¿Cuál considera que más lo afectan  para comercializar los productos agropecuarios?</legend>
						<div class="row">	
							


							<div class="col-xm-12 col-sm-4 col-md-4">
								<md-input-container class="md-block">
									<label>limitantes  para comercializar los productos agropecuarios</label>
									<md-select ng-model="Encuesta.limiteComerAgro" required>
										<md-option value="1">Falta de asesoría y capacitación</md-option>
										<md-option value="2"> Infraestructura vial</md-option>
										<md-option value="3">Costos de transporte</md-option>
										<md-option value="4">Tiempo de desplazamiento</md-option>
										<md-option value="5">Bloqueos militares</md-option>
										<md-option value="6">Otros</md-option>
									</md-select>
								</md-input-container>
							</div>

							<div class="col-xm-12 col-sm-4 col-md-4">
								<md-input-container class="md-block">
									<label>Recibe usted asistencia técnica?</label>
									<md-select ng-model="Encuesta.asistenciaTec" required>
										<md-option value="0">Ninguna</md-option>
										<md-option value="1">Casa comercial</md-option>
										<md-option value="2">UMATA</md-option>
										<md-option value="3">CAR</md-option>
										<md-option value="4">Particular</md-option>
										<md-option value="5">Otra </md-option>
									</md-select>
								</md-input-container>
							</div>

							<div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.asistenciaTec == 5">
								<md-input-container class="md-block">
									<label>Cúal?</label>
									<input type="text" ng-model="Encuesta.asistenciaTecCual" required>
								</md-input-container>
							</div>

							<div class="col-xm-12 col-sm-6 col-md-6">
								<md-input-container class="md-block">
									<label>limitantes  que impiden la producción agropecuaria</label>
									<md-select ng-model="Encuesta.limiteCProAgro" required>
										<md-option value="1">Falta de Información para subsidios y credito</md-option>
										<md-option value="2">Falta de incentivos por parte del Estado</md-option>
										<md-option value="3">Manejo inadecuado de  prácticas culturales</md-option>
										<md-option value="4">Falta de capacitación agropecuaria</md-option>
										<md-option value="5">Falta de asistencia técnica</md-option>
										<md-option value="6">Bajos niveles de comercialización</md-option>
										<md-option value="7">Situación de orden publico</md-option>
										<md-option value="8">Otros</md-option>
									</md-select>
								</md-input-container>
							</div>

							<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.limiteCProAgro == 8">
								<md-input-container class="md-block">
									<label>Cuales?</label>
									<input type="text" ng-model="Encuesta.limiteCProAgroCual" required>
								</md-input-container>
							</div>
						</div>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<md-switch ng-model="Encuesta.orgSocial" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
							Las organizaciones sociales existentes evidencian las necesidades de la comunidad, articulan y promueven alternativas de desarrollo sostenibles?
						</md-switch>
						<md-input-container class="md-block" ng-if="Encuesta.orgSocial == 1">
							<label>Cuales?</label>
							<input type="text" ng-model="Encuesta.orgSocialcual" required>
						</md-input-container>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<md-switch ng-model="Encuesta.orgProd" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
							¿Existen organizaciones  de producción agrícola, pecuaria y de productos?
						</md-switch>
						<md-input-container class="md-block" ng-if="Encuesta.orgProd == 1">
							<label>Cuales?</label>
							<input type="text" ng-model="Encuesta.orgProdcual" required>
						</md-input-container>
					</div>

					<div class="col-xm-12 col-sm-12 col-md-12">
						<md-switch ng-model="Encuesta.orgExplo" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
							¿Se encuentra usted organizado para la explotación de los recursos pecuarios/agrícolas?
						</md-switch>
					</div>


					<div ng-if="Encuesta.orgExplo == 1">
						<div class="col-xm-12 col-sm-12 col-md-12">
							<md-input-container class="md-block">
								<label>¿En qué tipo de organización?</label>
								<input type="text" ng-model="Encuesta.orgExplocual" required>
							</md-input-container>
						</div>




						<!--legend>¿Cuáles son las debilidades del gremio al cual pertenece, de acuerdo a su actividad económica</legend-->

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Formación empresarial y productiva</label>
							<md-radio-group ng-model="Encuesta.debilgremioEmpresa" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Ausencia de espacios de comunicación y decisión con el Estado</label>
							<md-radio-group ng-model="Encuesta.debilgremioComunicacion" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Acceso al mercado de sus productos</label>
							<md-radio-group ng-model="Encuesta.debilgremioMercado" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Falta de Organización entre los productores</label>
							<md-radio-group ng-model="Encuesta.debilgremioOrganiza" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Los precios del comercio en la región son bajos</label>
							<md-radio-group ng-model="Encuesta.debilgremioPrecio" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Situación de orden publico</label>
							<md-radio-group ng-model="Encuesta.debilgremioOrdPubl" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-12 col-md-12">
							<md-switch ng-model="Encuesta.debilgremioOtros" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
								Otros
							</md-switch>
							<md-input-container class="md-block" ng-if="Encuesta.debilgremioOtros == 1">
								<label>Cuales?</label>
								<input type="text" ng-model="Encuesta.debilgremioOtroscual" required>
							</md-input-container>
						</div>
					</div>

				</div> <!-- trabajaparcela -->
				

				<div class="row">
		

				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-switch ng-model="Encuesta.empProceso" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
						¿Tiene usted conocimiento de entidades o empresas  que acompañen los procesos de los diferentes sectores productivos en su región?
					</md-switch>
				</div>

				<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.empProceso == 1">
					<div class="row">
						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-input-container class="md-block">
								<label>Cuales Entidades?</label>
								<input type="text" ng-model="Encuesta.empProcesoCual" required>
							</md-input-container>
						</div>


						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-input-container class="md-block">
								<label>¿Tipo de acompañamiento?</label>
								<md-select ng-model="Encuesta.tipoAconaniamiento" required>
									<md-option value="1">Formación social y productiva</md-option>
									<md-option value="2">Asistencia técnica</md-option>
									<md-option value="3">Comercialización</md-option>
									<md-option value="4">Organización de productores</md-option>
									<md-option value="5">Acceso a Créditos de producción y comercialización</md-option>
									<md-option value="6">Asistencia Social y productiva</md-option>
									<md-option value="7">Otros</md-option>
								</md-select>
							</md-input-container>
						</div>

						<div class="col-xm-12 col-sm-4 col-md-4">
							<md-input-container class="md-block" ng-if="Encuesta.tipoAconaniamiento == 7">
								<label>Cúal acompañamiento?</label>
								<input type="text" ng-model="Encuesta.tipoAconaniamientoCual" required>
							</md-input-container>
						</div>
					</div>
				</div>


				<div class="col-xm-12 col-sm-12 col-md-12">
					<md-switch ng-model="Encuesta.proyProductivo" aria-label="Crianza de animales:" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
						Conoce usted proyectos productivos agropecuarios que se hayan implementado en su región?
					</md-switch>
				</div>

				<div class="col-xm-12 col-sm-12 col-md-12" ng-if="Encuesta.proyProductivo == 1">
					<div class="row">
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-input-container class="md-block">
								<label>¿De qué tipo?</label>
								<input type="text" ng-model="Encuesta.proyProductivoTipo" required>
							</md-input-container>
						</div>
						<div class="col-xm-12 col-sm-6 col-md-6">
							<md-input-container class="md-block">
								<label>Institución/entidad a cargo</label>
								<input type="text" ng-model="Encuesta.proyProductivoEntidad" required>
							</md-input-container>
						</div>


						<div class="col-xm-12 col-sm-6 col-md-6">
							<label>Actualmente funciona</label>
							<md-radio-group ng-model="Encuesta.proyProFunciona" layout="row">
								<md-radio-button value="1" class="md-primary">Si</md-radio-button>
								<md-radio-button value="2" class="md-primary">No</md-radio-button>
							</md-radio-group>
							<div class="margin-checkbox"></div>
						</div>

						<div class="col-xm-12 col-sm-6 col-md-6" ng-if="Encuesta.proyProFunciona == 2">
							<md-input-container class="md-block">
								<label>¿Por qué no funciona?</label>
								<input type="text" ng-model="Encuesta.proyProFuncionaPorque" required>
							</md-input-container>
						</div>
					</div>
				</div>
	</div>


			</div>
		</div>



	</div>
</form>
<md-button class="md-raised md-primary" ng-disabled="!Form2.$valid" ng-click="saveForm1('form3', 'menu-tab3')">
	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar y continuar
</md-button>