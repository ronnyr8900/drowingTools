<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Canvas</title>
</head>

<body>
<form action="index.php" method="post" name="form2" id="form2">
        <input type="hidden" name="comando" id="comando" value="<?=$_POST['comando']?>">
        <input type="hidden" name="ccreado" id="ccreado" value="1">
        <fieldset>
        <legend><strong>Parametros para el Canvas</strong></legend>
        Ancho:<input name="ancho" type="text" id="ancho" value="<?=$_POST['ancho']?>">
        Alto:<input name="alto" type="text" id="alto" value="<?=$_POST['alto']?>"><br><br>

        <input name="crear" type="submit" id="crear" title="crear" value="Crear Canvas">
  </fieldset>
</form>
</body>
</html>