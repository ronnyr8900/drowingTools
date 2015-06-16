<?php
$ccreado = $_POST['ccreado'];
$cfigura  = $_POST['cfigura'];
$orientacion = $_POST['orientacion'];
$largo = $_POST['largo'];
$crectangulo = $_POST['crectangulo'];
$ancho_rec = $_POST['ancho_rec'];
$alto_rec  = $_POST['alto_rec'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drawing Tool</title>
</head>

<body>
<h3>Drawing Tool</h3>
<br>
<form name="form1" id="form1" method="post" action="controller.php">
<input name="canvas_ancho" type="hidden" id="canvas_ancho" value="<?=$_POST['ancho']?>">
<input name="canvas_alto" type="hidden" id="canvas_alto" value="<?=$_POST['alto']?>">
<input name="ccreado" type="hidden" id="ccreado" value="<?=$ccreado?>">
<br>
<strong>C: Crea Lienzo.<br>
L: Dibuja linea.<br>
R: Dibuja Recangulo.<br>
Q: Salir</strong><br>
<br>
<strong>Indruduzca un comando (*):</strong>
<input name="comando" type="text" id="comando" onKeyUp="this.value = this.value.toUpperCase();"><br><br>
</form>
<button type="button" onClick="validarComando()">Siguiente >></button>
<br>
<br>
<?php

if($ccreado == 1){
	$canvas_ancho = $_POST['ancho'];
	$canvas_alto  = $_POST['alto'];
?>
<canvas id="myCanvas" width="<?=$canvas_ancho?>" height="<?=$canvas_alto?>" style="background-color:#AAC3DB"></canvas>
<?php
}
if($cfigura == 1 or $orientacion != 0){
	//echo "AAA";
	if($orientacion == 'v'){
?>
		<input name="orientacion" type="hidden" id="orientacion" value="<?=$orientacion?>">
        <input name="largo" type="hidden" id="largo" value="<?=$largo?>">
        <input name="crea_figura" type="hidden" id="crea_figura" value="<?=$cfigura?>">
        
<?php
	}else{	
?>
		<input name="orientacion" type="hidden" id="orientacion" value="<?=$orientacion?>">
        <input name="largo" type="hidden" id="largo" value="<?=$largo?>">
<input name="crea_figura" type="hidden" id="crea_figura" value="<?=$cfigura?>">
<?php
	}
}elseif($cfigura == 2){
?>
	<input name="r_ancho" type="hidden" id="r_ancho" value="<?=$ancho_rec?>">
    <input name="r_alto" type="hidden" id="r_alto" value="<?=$alto_rec?>">
<input name="crea_figura" type="hidden" id="crea_figura" value="<?=$cfigura?>">
<?php
}
?>

</body>
<script type="text/javascript">
	
	var creaLinea = document.getElementById('crea_figura').value;
	
	
    var canvas = document.getElementById('myCanvas');
    var context = canvas.getContext('2d');
	
	context.font = '40pt Calibri';
	
	if(creaLinea ==1){
		var orientacion = document.getElementById('orientacion').value;
		var largo = document.getElementById('largo').value;
		if(orientacion == 'v'){
		var y = 100;
		for (i=1;i<=largo;i++){
			
			context.fillText('x', 150, y);
			y=y+50
		}
		
	}else{
		//orientacion horizontal
		var y = 150;
		for (i=1;i<=largo;i++){
			
			context.fillText('x', y, 150);
			y=y+30;
		}
	}
	}else{
		if(creaLinea ==2){
			var rec_ancho = document.getElementById('r_ancho').value;
			var rec_alto = document.getElementById('r_alto').value;
			
			context.beginPath();
			context.rect(188, 50, rec_ancho, rec_alto);
			context.fillStyle = 'yellow';
			context.fill();
			context.lineWidth = 7;
    		context.strokeStyle = 'black';
			context.stroke();
			
		}
	}
</script>
<script>
function validarComando(){
	var comando = document.getElementById('comando').value;
	
	if(comando == ''){
		alert('Escriba un comando');
	}else{
		var str = 'ABDEFGHIJKMNÑOPSTVWXYZ';
		var n = str.indexOf(comando);

		if(n == -1){
			document.form1.submit();
			//alert('comando valido');
		}else{
			alert('comando no valido');
			
		}
	}
}
</script>
</html>