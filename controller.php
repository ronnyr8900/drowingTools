<?php
$comando = $_POST['comando'];
$ancho 	 = $_POST['canvas_ancho'];
$alto    = $_POST['canvas_alto'];
$ccreado = $_POST['ccreado'];

//echo $comando;

switch ($comando) {
    case 'C':
	// se pide en ancho y el alto para el canvas
	include('crea_canvas.php');
	break;
	
	case 'L':
	//creacion de linas
	include('crea_lineas.php');
	break;
	
	case 'R':
	//creacion de linas
	include('crea_rectangulo.php');
	break;
	
	case 'Q':
	//creacion de linas
	include('salir.php');
	break;
}
?>