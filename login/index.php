<?php
	session_start();
	require 'funciones/conexion.php';
	require 'funciones/funcs.php';
	$errors = array();

	if(!empty($_POST)){
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);

		if(isNullLogin($usuario, $password)){

			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);
	}

?>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../assets/css/bootstrap-grid.min.css" >
		<link rel="stylesheet" href="../../assets/css/bootstrap-reboot.min.css" >
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" >
		<link rel="stylesheet" href="../../assets/css/mystyle.css">
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body id="loigin">
		
		<div>    
			<div id="" class="  clo- 12 col-xs-12 col-md-4 col-lg-4 col-xl-4 bg-lightrans p-5 m-5 float-right rounded">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title"><h5 class="font-weight-bold text-dark">Iniciar Sesión</h5></div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvidó; tu contraseña?</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-dark">Iniciar Sesión</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
						<?php echo resultBLock($errors); ?>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>				