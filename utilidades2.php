<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
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

<h1>UTILIDADES</h1>
<!--
CONTENIDO
-->
<p>En esta sección encontrarás algunas de las utilidades de romhacking más usadas 
por mí y muchos otros traductores.
<h2>EDITORES HEXADECIMALES</h2>
<li><a href="files/thingyv20.zip">ThingyV</a>: Versión modificada por Vegetal Gibber del clásico editor 
Thingy. Es bastante bueno, rápido aunque tiene algunas pequeñas limitaciones.</li>
<li><a href="files/translhextion.zip">Translhextion</a>: Un ya antiguo editor hex, con muchas funciones útiles 
(extracción, optimización e inserción de scripts, copiar y pegar, etc.), tiene 
algunos bugs, pero es una opción recomendable.</li>
<li><a href="files/hexcalibur.zip">Hex-Calibur</a>: Un editor poco conocido pero muy bueno (al menos para mí =P), 
tiene búsqueda relativa y generación de tablas.</li><br />
<h2>EDITORES GRÁFICOS</h2>
<li><a href="files/tlp.zip">Tile Layer Pro</a>: Excelente editor gráfico, posee varios codecs y la 
posibilidad de copiar gráficos de un formato a otro.</li>
<li><a href="files/yy-chr.zip">YY-CHR</a>: Otro excelente editor gráfico, con varios codecs. Recomendado.</li>
<li>Tile Molester: Uno de los mejores, posee una cantidad descomunal de codecs. Recomendado.
NOTA: Requiere las <a href="http://java.sun.com" target="_blank">librerías de Java</a> para funcionar. Puedes bajarlo de su <a target="_blank" href="http://www.stud.ntnu.no/~kenth/tm/">WEB</a></li><br />
<h2>SCRIPTS</h2>
<li><a href="files/romjuice.zip">RomJuice</a>: Versátil extractor de scripts. 
Recomendado.</li>
<li><a href="files/s-ext.zip">Script Extractor</a>: Extractor básico de scripts. Bastante bueno, pero hay mejores alternativas.</li>
<li><a href="files/s-ins.zip">Script Inserter</a>: Insertador (se dice así? xD) básico de scripts. Bastante bueno, pero hay mejores alternativas.</li><br />
<li><a href="files/dteseek.zip">DTESeek</a>: Programa que revisa el texto que le 
indicas y crea un fichero con las combinaciones de letras (DTE) más usadas. Muy 
útil cuando modificas la tabla DTE para poder introducir más texto.
<h2>ASM</h2>
<li><a href="files/laddress.zip">Lunar Address</a>: Conversor de Offsets de SNES, Lo-ROM, Hi-ROM, PC, savestates de ZSNES... Recomendado.</li>
<li><a href="files/x816.zip">X816</a>: El mejor ensamblador de 6502/65816. Recomendado.</li><br />
<h2>OTROS</h2>
<li><a href="files/snestool.zip">SnesTool</a>: Muy buena utilidad para manipular roms de SNES, cambia formatos, 
agrega y quita headers, aplica y crea parches IPS. Muy completo. Recomendado.</li>
<li><a href="files/lips.zip">Lunar IPS</a>: El mejor parcheador / creador de parches</p>




<?php

include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>