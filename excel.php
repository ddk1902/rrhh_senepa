<?php

require 'conexion2.php';
$excel=utf8_decode($_POST['export']);
$query=mysqli_query($conexion,"SELECT * FROM usuario");
$document=utf8_decode("Planilla de datos de funcionarios del SENEPA.xls");
header("Content-disposition: attachment; filename=Archivo.xlsx");
header("Content-type: application/vnd.ms-excel; charset=utf8");


/* header("Content-Type:   application/vnd.ms-excel; charset=utf-8"); */
header('content-Disposition: attachment; filename='.$document);
header('Pragma: no-cache');
header('Expires: 0');
echo '<table border=1>';
echo '<tr>';
echo '<th colspan=26 font-color=#E9967A></th>';
echo '</tr>';
echo '<tr>
<th  style="background-color:#F6DDCC"; font-size:14pt;">NroDoc</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Nombres</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Apellidos</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Telefono</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Email</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Nro.Ficha</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Nro.Legajo</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Tipo de Vinculo</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Rubro</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">FechaNacimiento</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Dependencia</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Seccion</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Estado Civil</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Edad</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Nacionalidad</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Sexo</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Direccin</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Ciudad</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Barrio</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">GradoAcad.</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Titulo</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Profesion</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Fecha Ingreso</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Resolucion/Decreto</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Horario</th>
<th style="background-color:#F6DDCC"; font-size:14pt;">Carga Horaria</th>
</tr>';
while($row=mysqli_fetch_array($query)){
    echo '<tr>';
    echo '<td>'.$row['dni'].'</td>';
    echo '<td>'.$row['nombre'].'</td>';
    echo '<td>'.$row['apellidos'].'</td>';
    echo '<td>'.$row['telefono'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['nro_ficha'].'</td>';
    echo '<td>'.$row['nro_legajo'].'</td>';
    echo '<td>'.$row['tipo_vinculo'].'</td>';
    echo '<td>'.$row['rubro'].'</td>';
    echo '<td>'.$row['fecha_nac'].'</td>';
    echo '<td>'.$row['dependencia'].'</td>';
    echo '<td>'.$row['seccion'].'</td>';
    echo '<td>'.$row['estado_civil'].'</td>';
    echo '<td>'.$row['edad'].'</td>';
    echo '<td>'.$row['nacionalidad'].'</td>';
    echo '<td>'.$row['sexo'].'</td>';
    echo '<td>'.$row['direccion'].'</td>';
    echo '<td>'.$row['ciudad'].'</td>';
    echo '<td>'.$row['barrio'].'</td>';
    echo '<td>'.$row['grado_academico'].'</td>';
    echo '<td>'.$row['titulo'].'</td>';
    echo '<td>'.$row['profesion'].'</td>';
    echo '<td>'.$row['fecha_ingreso'].'</td>';
    echo '<td>'.$row['res_decreto'].'</td>';
    echo '<td>'.$row['horario'].'</td>';
    echo '<td>'.$row['carga_horaria'].'</td>';
    echo '</tr>';
}
    echo '</table>';