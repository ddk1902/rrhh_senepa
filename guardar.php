<?php 
	include("conexion2.php");

	$idusuario = $_POST["idusuario"];	
	$opcion = $_POST["opcion"];

	if($opcion == "registrar" || $opcion == "modificar"){//obtener el valor de los campos
		$nombre = $_POST["nombre"];
		$apellidos = $_POST["apellidos"];
		$dni = $_POST["dni"];
		$telefono = $_POST["telefono"];
		$email= $_POST["email"];
		$nro_ficha= $_POST["nro_ficha"];
		$nro_legajo= $_POST["nro_legajo"];
		$tipo_vinculo= $_POST["tipo_vinculo"];
		$rubro= $_POST["rubro"];
		$fecha_nac= $_POST["fecha_nac"]; 
		$dependencia= $_POST["dependencia"];
		$seccion = $_POST["seccion"];
       $estado_civil = $_POST["estado_civil"];    
		$edad = $_POST["edad"];
		$nacionalidad = $_POST["nacionalidad"];
		$sexo = $_POST["sexo"];
		$direccion = $_POST["direccion"];
		$ciudad= $_POST["ciudad"];
		$barrio = $_POST["barrio"];
		$grado_academico = $_POST["grado_academico"];
		$titulo = $_POST["titulo"];
		$universidad = $_POST["universidad"];
		$profesion = $_POST["profesion"];
		$fecha_ingreso = $_POST["fecha_ingreso"];
		$res_decreto = $_POST["res_decreto"];
		$horario = $_POST["horario"];
		$carga_horaria = $_POST["carga_horaria"];
	}

	$informacion = [];

	switch ( $opcion ) {
		case 'registrar':
				if( $nombre != "" && $apellidos != "" && $dni != "" ){
					$existe = existe_usuario($dni, $conexion);
					if( $existe > 0 ){
						$informacion["respuesta"] = "EXISTE";
						echo json_encode($informacion);
					}else{
						registrar($nombre, $apellidos, $dni,$telefono,$email,$nro_ficha,$nro_legajo, $tipo_vinculo,$rubro,$fecha_nac,$dependencia,$seccion,$estado_civil,$edad,$nacionalidad,$sexo,$direccion,$ciudad,$barrio,$grado_academico,$titulo,$universidad,$profesion,$fecha_ingreso,$res_decreto,$horario,$carga_horaria,$conexion);
					}									
				}else{
					$informacion["respuesta"] = "VACIO";
					echo json_encode($informacion);
				}
			break;
		case 'modificar':
			modificar($nombre, $apellidos, $dni, $idusuario,$telefono,$email,$nro_ficha,$nro_legajo,$tipo_vinculo,$rubro,$fecha_nac,$dependencia,$seccion,$estado_civil,$edad,$nacionalidad,$sexo,$direccion,$ciudad,$barrio,$grado_academico,$titulo,$universidad,$profesion,$fecha_ingreso,$res_decreto,$horario,$carga_horaria,$conexion);
			break;		
		case 'eliminar':
			eliminar($idusuario, $conexion);
			break;
		default:
			$informacion["respuesta"] = "OPCION_VACIA";
			echo json_encode($informacion);
			break;
	}

	function existe_usuario($dni, $conexion){
		$query = "SELECT idusuario FROM usuario WHERE dni = '$dni';";
		$resultado = mysqli_query($conexion, $query);
		$existe_usuario = mysqli_num_rows( $resultado );
		return $existe_usuario;
	}

	function registrar($nombre, $apellidos, $dni,$telefono,$email,$nro_ficha,$nro_legajo,$tipo_vinculo,$rubro,$fecha_nac,$dependencia,$seccion,$estado_civil,$edad,$nacionalidad,$sexo,$direccion,$ciudad,$barrio,$grado_academico,$titulo,$universidad,$profesion,$fecha_ingreso,$res_decreto,$horario,$carga_horaria, $conexion){
		$query = "INSERT INTO usuario VALUES(0, '$nombre', '$apellidos', '$dni','$telefono','$email','$nro_ficha','$nro_legajo','$tipo_vinculo','$rubro','$fecha_nac','$dependencia','$seccion','$estado_civil','$edad','$nacionalidad','$sexo','$direccion','$ciudad','$barrio','$grado_academico','$titulo','$universidad','$profesion','$fecha_ingreso','$res_decreto','$horario','$carga_horaria',1);";
		$resultado = mysqli_query($conexion, $query);		
		verificar_resultado($resultado);
		cerrar($conexion);
	}

	function modificar($nombre, $apellidos, $dni, $idusuario,$telefono,$email,$nro_ficha,$nro_legajo,$tipo_vinculo,$rubro,$fecha_nac,$dependencia,$seccion,$estado_civil,$edad,$nacionalidad,$sexo,$direccion,$ciudad,$barrio,$grado_academico,$titulo,$universidad,$profesion,$fecha_ingreso,$res_decreto,$horario,$carga_horaria, $conexion){	
		$query= "UPDATE usuario SET 	nombre='$nombre', 
										apellidos='$apellidos', 
										dni='$dni',
										telefono='$telefono',
										email='$email',
										nro_ficha='$nro_ficha',
										nro_legajo='$nro_legajo',
										tipo_vinculo='$tipo_vinculo',
										rubro='$rubro',
										fecha_nac='$fecha_nac',
										dependencia='$dependencia',
										seccion='$seccion',
										estado_civil='$estado_civil',
										edad='$edad', 
										nacionalidad='$nacionalidad',
										sexo='$sexo',
										direccion='$direccion', 
										ciudad='$ciudad', 
										barrio='$barrio',
										grado_academico='$grado_academico',
										titulo='$titulo',
										universidad='$universidad',  
										profesion='$profesion', 
										fecha_ingreso='$fecha_ingreso', 
										res_decreto='$res_decreto', 
										horario='$horario',
										carga_horaria='$carga_horaria'

								WHERE   idusuario=$idusuario";
		$resultado = mysqli_query($conexion, $query);
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function eliminar($idusuario, $conexion){
		$query = "DELETE FROM usuario  WHERE idusuario = $idusuario";
		$resultado = mysqli_query($conexion, $query);
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function verificar_resultado( $resultado ){
		if( !$resultado )	$informacion["respuesta"] = "ERROR";
		else 	$informacion["respuesta"] = "BIEN";
		echo json_encode( $informacion );
	}

	function cerrar( $conexion ){
		mysqli_close( $conexion );
	}

 ?>