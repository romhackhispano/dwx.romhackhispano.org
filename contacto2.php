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

<h1>CONTACTO</h1>

      <p>Puedes contactar conmigo (DaRKWiZaRDX) vía mail, pero por favor lee lo 
      que sigue:<p>CORREOS QUE NO DEBES ENVIARME <strong>(y sus consecuencias):</strong></p>
      
        <li>Instrucciones sobre como aplicar parches (En la seccion de "Proyectos" al fondo hay un link a un tutorial). <strong>Borrado del mail.</strong></li>
	<li>Pedidos de ROMs. <strong>Borrado del mail, y si insistes, bloqueo de 
        dirección.</strong></li>
        <li>Pedidos de traducciones, cada uno traduce el juego que le gusta. 
        <strong>Borrado del mail.</strong></li>
        <li>Cosas sobre traducciones de otros autores, se les pregunta a ellos 
        :P. <strong>Borrado del mail.</strong></li>
        <li>Spam (obviamente).&nbsp;  <strong>Lo más sangriento que se me ocurra.</strong></li>

<p>Si tu mail no es ninguna de las anteriores, adelante:</p>
      <p>drkwzrdx [arroba] hotmail [punto] com<p>Se aceptan con gusto críticas 
        constructivas, felicitaciones (xD), reportes de bugs o errores en las 
        traducciones, etc.




<?php

include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>