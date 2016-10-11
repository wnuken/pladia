<div ng-app="pladiaApp" ng-controller="FormController">
  <div class="row">
    <div class="col-xm-12 col-sm-12 col-md-12">
      <h1 class="text-center">ENCUESTA DE HOGARES DE PERCEPCIÓN SOBRE LA SITUACIÓN DEPARTAMENTAL 
      </h1>
      <p>
        Buen día, esta encuesta hace parte de la construcción del PLAN DE DESARROLLO ANDINO AMZÓNICO PLADIA 2035  que está liderada por las organizaciones sociales, campesinas, sindicales, parte de la MOS  y esperamos que contribuya a mejorar las condiciones del Putumayo ADVERTENCIA: toda la información que contiene este formulario, así como sus datos personales serán de manejo exclusivo del equipo del Plan de desarrollo, no tendrán difusión alguna y se manejarán con el rigor y seguridad del caso.

      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-xm-12 col-sm-12 col-md-12">
      <legend></legend>
      <ul id="myTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="menu-tab active" id="menu-tab1">
          <a class="md-primary" href="#form1" id="home-tab" role="tab" data-toggle="tab" aria-controls="form1" aria-expanded="true" ng-click="changeTab('form1')">
            IDENTIFICACIÓN Y VIVIENDA
          </a>
        </li>
        <li role="presentation" class="menu-tab" id="menu-tab2">
          <a class="md-primary" href="#form2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="form2" aria-expanded="false" ng-click="changeTab('form2')">
            DATOS DEL HOGAR
          </a>
        </li>

        <li role="presentation" class="menu-tab" id="menu-tab3">
          <a class="md-primary" href="#form3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="form3" aria-expanded="false" ng-click="changeTab('form3')">
            ECONÓMICO PRODUCTIVO
          </a>
        </li>
        <li role="presentation" class="menu-tab" id="menu-tab4">
          <a class="md-primary" href="#form4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="form4" aria-expanded="false" ng-click="changeTab('form4')">
            SOCIAL Y OTRAS
          </a>
        </li>
        <li role="presentation" class="menu-tab" id="menu-tab5">
          <a class="md-primary" href="#form5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="form5" aria-expanded="false" ng-click="changeTab('form5')">
            CARÁCTERISTICAS GENERALES
          </a>
        </li>


      </ul>
    </div>
  </div>
  <br>
  <div class="hide">
    {{Encuesta.iduser = <?php echo $id_user; ?>}}
    {{Encuesta.idform = <?php echo $idform; ?>}}
  </div>
  <div id="form1" class="theform">
    <?php $this->load->view('template/home/form1'); ?>
  </div>
  <div id="form2" class="theform hide">
    <?php $this->load->view('template/home/form2'); ?>
  </div>
  <div id="form3" class="theform hide">
    <?php $this->load->view('template/home/form3'); ?>
  </div>
  <div id="form4" class="theform hide">
    <?php $this->load->view('template/home/form4'); ?>
  </div>
  <div id="form5" class="theform hide">
    <?php $this->load->view('template/home/form5'); ?>
  </div>
</div>
<div class="col-xm-12 col-sm-6 col-md-6"></div>


