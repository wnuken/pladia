<div class="row" ng-app="pladiaApp">
  <div class="col-xm-12 col-sm-12 col-md-12" ng-controller="LoginController">

  <div class="col-xm-1 col-sm-4 col-md-4"></div>
<div class="col-xm-10 col-sm-4 col-md-4">
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo"><img src="<?php echo base_url("assets/images/logo.jpg"); ?>"></div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" name="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="username" class="sr-only">Usuario</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Usuario"
						ng-model="Login.username" required>
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Contraseña</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña"
						ng-model="Login.password" required>
					</div>
				</div>
				<div class="text-center">
				<button type="button" class="btn btn-primary" ng-click="validateLogin()"><i class="glyphicon glyphicon-chevron-right"></i> Ingresar </button>
				</div>
			</div>
			<!--div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div-->
		</form>
	</div>
	<!-- end:Main Form -->
</div>

</div>
  	<div class="col-xm-1 col-sm-4 col-md-4"></div>
  </div>
</div>