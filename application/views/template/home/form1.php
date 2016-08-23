<form id="Form1" name="Form1">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-body">
        <legend class="md-subhead">A. MODULO DE IDENTIFICACIÓN</legend>

        <div class="col-xm-12 col-sm-6 col-md-6">
          <md-input-container class="md-block">
            <label>Departamento <small>*</small></label>
            <md-select ng-model="Encuesta.departamento" ng-change="getMunicipio()" required>
              <md-option ng-repeat="dpto in departamentos" value="{{dpto.id_dpto}}">
                {{dpto.departamento}}
              </md-option>
            </md-select>
          </md-input-container>
        </div>
        <div class="col-xm-12 col-sm-6 col-md-6">
          <md-input-container class="md-block">
            <label>Municipio <small>*</small></label>
            <md-select ng-model="Encuesta.municipio" required>
              <md-option ng-repeat="mucpo in municipios" value="{{mucpo.id_munipo}}">
                {{mucpo.municipio}}
              </md-option>
            </md-select>
          </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
          <md-input-container class="md-block">
            <label>Corregimiento</label>
            <input type="text" ng-model="Encuesta.corregimiento" required>
          </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
          <md-input-container class="md-block">
            <label>Vereda</label>
            <input type="text" ng-model="Encuesta.vereda" required>
          </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-12 col-md-12">
        <div class="row">
        <div class="col-xm-12 col-sm-4 col-md-4">
          <label>Territorio <small>*</small></label>
            <md-radio-group ng-model="Encuesta.resguardo" layout="row" required>
              <md-radio-button value="1" class="md-primary">Resguardo Indígena</md-radio-button>
              <md-radio-button value="2" class="md-primary">Consejo Comunitario</md-radio-button>
            </md-radio-group>
        </div>

        <div class="col-xm-12 col-sm-4 col-md-4">
          <md-input-container class="md-block">
            <label>Nombre del territorio</label>
            <input type="text" ng-model="Encuesta.nomcomunidad" required>
          </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-4 col-md-4">
          <label>Sector rural <small>*</small></label>
            <md-radio-group ng-model="Encuesta.sectorrural" layout="row" required>
              <md-radio-button value="1" class="md-primary">Centro Poblado</md-radio-button>
              <md-radio-button value="2" class="md-primary"> Rural disperso </md-radio-button>
            </md-radio-group>
        </div>
        </div>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
           <md-input-container class="md-block">
            <label>Nombre del encuestado</label>
            <input type="text" ng-model="Encuesta.nombreencuestado" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
           <md-input-container class="md-block">
            <label>Teléfono</label>
            <input type="number" ng-model="Encuesta.telefonoencuestado" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
           <md-input-container class="md-block">
            <label>Recolector</label>
            <input type="text" ng-model="Encuesta.nombrerecolector" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-6 col-md-6">
           <md-input-container class="md-block">
            <label>Supervisor</label>
            <input type="text" ng-model="Encuesta.nombresupervisor" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-4 col-md-4">
          <md-input-container class="md-block">
            <label>Total de hogares en la vivienda</label>
            <input type="number" ng-model="Encuesta.totalhogares" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-4 col-md-4">
          <md-input-container class="md-block">
            <label>Número del hogar en la vivienda</label>
            <input type="number" ng-model="Encuesta.numerohogar" required>
           </md-input-container>
        </div>

        <div class="col-xm-12 col-sm-4 col-md-4">
          <md-input-container class="md-block">
            <label>Total de personas en el hogar</label>
            <input type="number" ng-model="Encuesta.totalpersonas" required ng-change="generateForm4(Encuesta.totalpersonas)">
              <md-tooltip md-direction="top">
                La pestaña de caracteristicas generales depende del numero de personas en este campo
              </md-tooltip>
           </md-input-container>
        </div>


        <legend class="md-subhead">Durante los ÚLTIMOS 3 AÑOS, ¿el sector donde esta ubicada su vivienda sufrió algunos de los siguientes eventos?</legend>

       <div class="col-xm-12">
       <div class="row">
       <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.inundaciones" aria-label="Inundaciones" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Inundaciones
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.inundaciones == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.inundacionescuantas" required>
        </md-input-container>
      </div>

      <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.avalanchas" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Avalanchas
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.avalanchas == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.avalanchascuantas" required>
        </md-input-container>
      </div>

      <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.desbodamientos" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Desbordamiento de ríos, quebradas
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.desbodamientos == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.desbodamientoscuantas" required>
        </md-input-container>
      </div>
      </div>
      </div>
      <div class="col-xm-12">
       <div class="row">
      <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.deslizamientos" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Deslizamientos
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.deslizamientos == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.deslizamientoscuantas" required>
        </md-input-container>
      </div>

      <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.vendavales" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Vendavales
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.vendavales == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.vendavalescuantas" required>
        </md-input-container>
      </div>

      <div class="col-xm-12 col-sm-4 col-md-4">
         <md-switch ng-model="Encuesta.otrodesastre" aria-label="Avalanchas" ng-true-value="'1'" ng-false-value="'0'" class="md-primary">
          Otro desastre natural
        </md-switch>
        <md-input-container class="md-block" ng-if="Encuesta.otrodesastre == 1">
          <label>Cual?</label>
          <input type="text" ng-model="Encuesta.otrodesastrecual" required>
        </md-input-container>
        <md-input-container class="md-block" ng-if="Encuesta.otrodesastre == 1">
          <label>Cuantas veces?</label>
          <input type="number" ng-model="Encuesta.otrodesastrecuantas" required>
        </md-input-container>
      </div>
       </div>
      </div>

    </div>
  </div>
</div>
<div class="row">

  <div class="panel panel-default">
    <div class="panel-body">

      <legend class="md-subhead">B. RELACIONES TERRITORIALES</legend>

      <div class="col-xm-12 col-sm-12 col-md-12">
        <label>¿Ha vivido siempre en este municipio? <small>*</small></label>
        <md-radio-group ng-model="Encuesta.tiempovivido" layout="row" required>
          <md-radio-button value="1" class="md-primary">Si</md-radio-button>
          <md-radio-button value="2" class="md-primary">No</md-radio-button>
        </md-radio-group>
        
      </div>

      <div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.tiempovivido == 2">
        <md-input-container class="md-block">
          <label>Desde que año?</label>
          <input type="text" ng-model="Encuesta.tiempovividoanos" class="datepickeryear" required readonly is-dateyear>
        </md-input-container>
        </div>

      <div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.tiempovivido == 2">
        <md-input-container class="md-block">
          <label>Razón para venir a este municipio <small>*</small></label>
          <md-select ng-model="Encuesta.razonvivirnum" required>
            <md-option value="1">Laborales u oportunidad de negocio</md-option>
            <md-option value="2">Más oportunidades de educación</md-option>
            <md-option value="3">Motivos de salud</md-option>
            <md-option value="4">Matrimonio o conformación de un hogar</md-option>
            <md-option value="5">Amenaza o riesgo para su vida por conflicto armado</md-option>
            <md-option value="6">Amenaza o riesgo para su vida por  delincuencia común</md-option>
            <md-option value="7">Otra</md-option>
          </md-select>
        </md-input-container>
        
      </div>
      <div class="col-xm-12 col-sm-4 col-md-4" ng-if="Encuesta.tiempovivido == 2 && Encuesta.razonvivirnum == 7">
        <md-input-container class="md-block">
            <label>¿Cual?</label>
            <input type="text" ng-model="Encuesta.razonvivirnumcual" required>
           </md-input-container>
      </div>

      
</div>
</div>
</div>


<div class="row">

  <div class="panel panel-default">
    <div class="panel-body">

      <legend class="md-subhead">C. DATOS DE LA VIVIENDA</legend>


      <div class="col-xm-12 col-sm-4 col-md-4">
        <md-input-container class="md-block">
          <label>Tipo de Vivienda <small>*</small></label>
          <md-select ng-model="Encuesta.tipovivienda" required>
        <md-option value="1">Casa</md-option>
        <md-option value="2">Apartamento</md-option>
        <md-option value="3">Cuartos en inquilinato</md-option>
        <md-option value="4">Otro tipo de vivienda (carpa, tienda, vagón, refugio natural etc.)</md-option>
          </md-select>
        </md-input-container>
      </div>


      <div class="col-xm-12 col-sm-4 col-md-4">
        <md-input-container class="md-block">
          <label>Material de las paredes exteriores <small>*</small></label>
          <md-select ng-model="Encuesta.materialparedes" required>
      <md-option value="1">Ladrillo a la vista</md-option>
      <md-option value="2">Bloque a la vista</md-option>
      <md-option value="3">Ladrillo o bloque revocado o pañetado</md-option>
      <md-option value="4">Piedra o madera pulida</md-option>
      <md-option value="5">Tapia pisada, adobe</md-option>
      <md-option value="6">Madera burda, tabla o tablón</md-option>
      <md-option value="7">Zinc, tela, lona, cartón, latas, desechos, plástico</md-option>
          </md-select>
        </md-input-container>
      </div>


      <div class="col-xm-12 col-sm-4 col-md-4">
        <md-input-container class="md-block">
          <label>Material predominante de los pisos <small>*</small></label>
          <md-select ng-model="Encuesta.materialpisos" required>
    <md-option value="1">Baldosa, cerámica, madera pulida, alfombra</md-option>
    <md-option value="2">Ladrillo, madera pulida sin lacar.</md-option>
    <md-option value="3">Madera burda, tabla o tablón, otro vegetal.</md-option>
    <md-option value="4">Cemento, gravilla.</md-option>
    <md-option value="5">Tierra, arena.</md-option>
          </md-select>
        </md-input-container>
      </div>


  


<legend class="md-subhead">¿Con cuáles de los siguientes servicios cuenta la vivienda?</legend>

<div class="col-xm-12 col-sm-12 col-md-12">
  <div class="form-group">
    <md-checkbox ng-model="Encuesta.servienergia" aria-label="Energía eléctrica" class="md-primary" value="1">
      Energía eléctrica
    </md-checkbox>
    <md-checkbox ng-model="Encuesta.servigas" aria-label="Gas natural conectado a red pública" class="md-primary" value="1">
      Gas natural conectado a red pública
    </md-checkbox>
    <md-checkbox ng-model="Encuesta.servialcant" aria-label="Alcantarillado" class="md-primary" value="1">
      Alcantarillado
    </md-checkbox>
    <md-checkbox ng-model="Encuesta.servireco" aria-label="Recolección de basuras" class="md-primary" value="1">
      Recolección de basuras
    </md-checkbox>
    <md-checkbox ng-model="Encuesta.serviacueducto" aria-label="Acueducto" class="md-primary" value="1">
      Acueducto
    </md-checkbox>
  </div>
</div>

<div class="col-xm-12 col-sm-4 col-md-4">
  <md-input-container class="md-block">
    <label>Estrato</label>
    <input type="number" ng-model="Encuesta.estrato" required>
  </md-input-container>
</div>




    <!--div class="col-xm-12 col-sm-6 col-md-6">
      <div class="form-group">
        <label for="exampleInputtext1">18. En total ¿cuántos hogares hay en la vivienda?</label>
        <input type="text" class="form-control input-sm" id="exampleInputtext1" placeholder="text">
      </div>
    </div-->

  </div>
</div>
</div>
</form>

<md-button class="md-raised md-primary" ng-disabled="!Form1.$valid" ng-click="saveForm1('form2', 'menu-tab2')">
<span class="glyphicon glyphicon-floppy-disk"></span> Guardar y continuar
</md-button>