<?php
	
	require "conexion.php";
	include_once "alerta_modal.php";
	session_start();
	$actual = date("Y-m-d H:i:s");
	
	if($_POST){
		
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = sha1($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				
				sleep(3);
				
				echo'<script type="text/javascript">
    			alert("Acceso correcto. Bienvenido.!");
    			window.location.href="index.html";
    			</script>';
				//$sql="UPDATE SESIONES  set ultima_sesion='$actual',nombre_usuario=$usuario where usuario='$usuario'";
				
				
			} else {
				sleep(2);
				echo'<script type="text/javascript">
    			alert("Contraseña incorrecta.Intente de nuevo por favor..!!");
    			window.location.href="index.php";
    			</script>';
			
			}
			
			
			} else {
				sleep(3);
				echo'<script type="text/javascript">
    			alert("Datos de acceso incorrecto..Por favor intente de nuevo.!!");
    			window.location.href="index.php";
    			</script>';
		}
		
		
		
	}
	
	
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<link rel="icon" href="senepa.ico" type="image/ico">
        <title>Registro de datos de funcionarios del SENEPA</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="bg-login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
										<center>
									<img src="SENEPA2.png"></img>
                                        </center>
									<div class="card-header"><h3 class="text-center font-dark my-1">Ingresar</h3></div>
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress"></label><input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Ingrese su usuario" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword"></label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Ingrese su contraseña" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Recordar contraseña?</label></div>
											</div>
                                            <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a> -->
											<center>
											<button type="submit" class="btn btn-primary">Ingresar</button></div>
											
										</form>
									</div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SENEPA 2022</div>
                            <div>
                                <a href="#">Políticas de Privacidad</a>
                                &middot;
                                <a href="#">Términos &amp; Condiciones</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
	</body>
</html>
