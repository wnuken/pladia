<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">

	<link href="<?php echo base_url("assets/datepicker/css/bootstrap-datepicker.min.css"); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url("assets/angularjs/css/ng-grid.css"); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url("assets/angularjs/css/angular-material.min.css"); ?>" rel="stylesheet" >
	<link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" >

	<title>Encuesta Hogares</title>
</head>
<body>
	<div class="col">
	<div class="container-fluid">
			<?php $this->load->view('template/' . $view); ?>
		</div>

	</div>
</body>
<script src="<?php echo base_url("assets/jquery/jquery.2.2.4.min.js"); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?> "></script>
<script src="<?php echo base_url("/assets/datepicker/js/bootstrap-datepicker.min.js"); ?>" rel="stylesheet"></script>
<script src="<?php echo base_url("/assets/datepicker/locales/bootstrap-datepicker.es.min.js"); ?>" rel="stylesheet"></script>
<script src="<?php echo base_url("/assets/base64encode/jquery.base64.min.js"); ?>" rel="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/angular.1.5.7.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/angular-animate.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/angular-aria.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/angular-messages.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/angular-local-storage.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/angularjs/js/ui-grid.min.js"); ?>" rel="stylesheet"></script>

<script src="<?php echo base_url("/assets/angularjs/js/angular-material.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/controllers.js"); ?>"></script>

</html>