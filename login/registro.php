
<?php

	require 'funciones/conexion.php';
	require 'funciones/funcs.php';
	
	$errors = array();

	alert("joder tio");

	if(!empty($_POST)){

		$nombre = $mysqli->real_scape_string($_POST['nombre']);
		$usuario = $mysqli->real_scape_string($_POST['usuario']);
		$password = $mysqli->real_scape_string($_POST['password']);
		$conf_password = $mysqli->real_scape_string($_POST['conf_password']);
		$email = $mysqli->real_scape_string($_POST['email']);
		$captcha = $mysqli->real_scape_string($_POST['g-recaptcha-response']);

		$activo = 0;
		$tipo_usuario = 2;
		$secret = '6LcqKXYUAAAAAP3qMX8B6EJf-cmJef4ly9_yi_DY';

		if(!$captcha){
			$errors[] = "Por Favor Verifica el captcha";
		}

		//validacion por el lado del servidor y no solo de html
		if(isNull($nombre, $usuario, $password, $conf_password, $email)){
			$errors[] = "Debe llenar todos los campos";
		}

		if(!isEmail($email)){

			$errors[] = "Ingrese un email valido";

		}

		if(!validaPassword($password, $conf_password)){

			$errors[] = "Las contraseñas no coinciden";

		}

		if(usuarioExiste($usuario)){

			$errors[] = "El usuario $usuario ya esxiste";

		}


		if(emailExiste($usuario)){

			$errors[] = "El correo electronico $email ya esxiste";

		}

		if(count($errors)==0){
			echo "entro";
			/*
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

			$arr = json_decode($response, TRUE);

			if($arr['success']){

				$hash_passwords = hashPassword($password);
				$token = generateToken();
				$Registro = registraUsuario($usuario, $hash_passwords, $nombre, $email, $activo, $token, $tipo_usuario);

				if($registro > 0){

					$url = 'http://'.$_SERVER["SERVER_NAME"].'/SISTEMA_SIG/login/activar.php?id='.$registro.'&val='.$token;

					$asunto = 'Wesleyana Casa De Dios Activate - SISTEMA SIG';
					$cuerpo = "Estimado líder $Nombre: <br /><br /> De Clic en el siguiente enlace para continuar con el proceso de registro  <a href='$url'>Activar Cuenta</a>";

					if(enviarEmail($email, $nombre, $asunto, $cuerpo))
					{
						echo "Se ha enviado un correo al email proporcionado: $email, para poder disfrutar de todos nuestros beneficios";

						echo "<br><a href='index.php' >Iniciar Sesión</a>";

						//Evita que el formulario se siga ejecutando
						//Si todo esta correcto
						exit;

					}else{
						$errors[] = "Error al enviar el email";
					}

				}else{
					$errors[]="Error al registrar";
				}


			}else{

				$errors[] = "Error al comprobar captcha";
			}

			*/

		}




	}


?>
<html>
	<head>
		<title>Registro</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="conf_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="captcha" class="col-md-3 control-label"></label>
								<div class="g-recaptcha col-md-9" data-sitekey="6LcqKXYUAAAAAMOkvghFCxBOZQ-uPP5ad9hRSh0C"></div>
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
						</form>
						<?php echo resultBlock($errors); ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>													