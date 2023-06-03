<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><?php
if(!$PHP_SELF){
	if($HTTP_POST_VARS) 	{extract($HTTP_POST_VARS, EXTR_PREFIX_SAME, "post_");}
	if($HTTP_GET_VARS)  	{extract($HTTP_GET_VARS, EXTR_PREFIX_SAME, "get_");}
	if($HTTP_COOKIE_VARS)	{extract($HTTP_COOKIE_VARS, EXTR_PREFIX_SAME, "cookie_");}
	if($HTTP_ENV_VARS)	 	{extract($HTTP_ENV_VARS, EXTR_PREFIX_SAME, "env_");}
}
if($PHP_SELF == ""){ $PHP_SELF = $HTTP_SERVER_VARS[PHP_SELF]; }
?>

<html>
<head>
<title>DaRKWiZaRDX translations</title>
<link href="estilo.css" type="text/css" rel="stylesheet" />
</head>
<?php
include("modulos/head.php");
?>
<body>
<?php
include("modulos/encabezado.php");
include("modulos/secciones.php");
?>
<div id="contenido">


<h1>LINKS</h1>
<p>Enlaces a otras webs relacionadas con el romhacking o similares XD, si hay algun link roto por favor avisame y lo corregire, si quieres que agregue tu web a esta lista, o que la quite si ya está envíame un mail.</p>
<li><a href="http://www.romhackhispano.org" target="_blank">RomhackHispano.org</a>: Web que engloba casi todos los sitios de la CHR, con una gran lista de los parches de cada uno de los grupos.</li>
<li><a href="http://foro.romhackhispano.org" target="_blank">Foro de la CHR</a>: Principal sitio de encuentro y exposicion de consultas de la CHR, cualquier duda, al foro, que es toda gente muy amable xD</li>
<li><a href="http://wiki.romhackhispano.org" target="_blank">Wiki de la CHR</a>: La Wiki de la CHR, aun no tiene muchos articulos, pero tiene varias cosas interesantes (mas lo que puedas agregar, claro :)</li>
<li><a href="http://www.romhacking.net" target="_blank">RHDN</a>: El principal sitio de reunion de la escena anglo, excelente recopilacion de documentos, utilidades, parches, hacks y un foro muy activo.</li>
<li><a href="http://fortaleza.romhackhispano.org" target="_blank">Fortaleza Romhack</a>: Llevado por HeXPLuS y KaOSoFT, gran sitio de romhacking, que fue por un buen tiempo el principal sitio de reunion de la escena.</li>
<li><a href="http://lukas.romhackhispano.org" target="_blank">Traducciones Lukas</a>: ...Por la cantidad y calidad de las traducciones pareciera un grupo de 15 traductores, pero es uno solo o_O. Muy buenos proyectos.</li>
<li><a href="http://sayans.romhackhispano.org" target="_blank">Sayans traductions</a>: Uno de los grupos con mas historia de la escena, muy buenos parches y el mejor documento de romhacking en español (por lejos).</li>
<li><a href="http://magno.romhackhispano.org" target="_blank">Traducciones Magno</a>: El sitio de uno de los mejores y mas experimentados traductores de la escena, con algunas de las mejores traducciones al español que se han visto (incluyendo las oficiales :P)</li>
<li><a href="http://eden.romhackhispano.org" target="_blank">Eden Traducciones</a>: El grupo de traduccion de Alan, Noishe y compañia, la web esta algo detenida a la fecha, pero tiene varios proyectos muy prometedores</li>
<li><a href="http://www.lawebdelprogramador.com" target="_blank">La web del programador</a>: Aunque no esta relacionada directamente con el romhacking, es muy importante para todo lo que es compresion/descompresion el saber programar, y esta web contiene cientos de tutoriales excelentes.</li>




<?php

include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>