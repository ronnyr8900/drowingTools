<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Creacion de lineas</title>
</head>

<body>
<form action="index.php" method="post" id="form3" name="form3">
<input type="hidden" name="comando" id="comando" value="<?=$_POST['comando']?>">
<input type="hidden" name="ancho" id="ancho" value="<?=$ancho?>">
<input type="hidden" name="alto" id="alto" value="<?=$alto?>">
<input name="ccreado" type="hidden" id="ccreado" value="<?=$_POST['ccreado']?>">
<input name="cfigura" type="hidden" id="cfigura" value="1">
<fieldset>
	<legend><strong>Parametros para crear lineas</strong></legend>
    Largo: <input name="largo" type="text" id="largo">
    Orientacion: 
    <select name="orientacion" id="orientacion">
      <option value="0">Escoge una opcion</option>
      <option value="v">Vertical</option>
      <option value="h">Horizontal</option>
    </select>
</fieldset><br>
<button type="submit">Crear linea</button>
</form>
</body>
</html>