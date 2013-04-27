<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thumbnail</title>
</head>
<body>
<?php
	$ruta			= 'img/imagen1.jpg';
	$fuente		= @imagecreatefromgif($ruta);
	$imgAncho	= imagesx ($fuente);
	$imgAlto		= imagesy($fuente);
	$imagen		= ImageCreate($ancho,$alto);

	ImageCopyResized($imagen,$fuente,0,0,0,0,$ancho,$alto,$imgAncho,$imgAlto);

	Header("Content-type: image/gif");
	imageGif($imagen);
?>
</body>
</html>