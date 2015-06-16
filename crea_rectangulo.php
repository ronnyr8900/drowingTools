<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>crea rectangulo</title>
</head>

<body>
<form action="index.php" method="post" id="form3" name="form3">
<input type="hidden" name="comando" id="comando" value="<?=$_POST['comando']?>">
<input type="hidden" name="ancho" id="ancho" value="<?=$ancho?>">
<input type="hidden" name="alto" id="alto" value="<?=$alto?>">
<input name="ccreado" type="hidden" id="ccreado" value="<?=$_POST['ccreado']?>">
<input name="cfigura" type="hidden" id="cfigura" value="2">
<fieldset>
	<legend><strong>Parametros para crear rectangulo</strong></legend>
    Ancho: <input name="ancho_rec" type="text" id="ancho_rec">
    Alto: <input name="alto_rec" type="text" id="alto_rec">
</fieldset><br>
<button type="submit">Crear rectangulo</button>
</form>
</body>
</html>