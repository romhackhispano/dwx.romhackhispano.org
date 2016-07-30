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


<h1>PROYECTOS</h1>



		<h2>Proyectos terminados</h2>


			<p>


			<a target="_blank" href="tradus/blackthorne.html">BLACKTHORNE (SNES)</a>
			<br>
			<a target="_blank" href="tradus/mmz3.html">MEGAMAN ZERO 3 (GBA)</a>
			<br>
			<a target="_blank" href="tradus/flintsadp.html">FLINTSTONES: Surprise at dinosaur peak (NES)</a>
			<br>
			<a target="_blank" href="tradus/ff1.html">FINAL FANTASY (NES)</a>
			<br>
		        <a target="_blank" href="tradus/mmz2.html">MEGAMAN ZERO 2 (GBA)</a>
			<br />
            <a target="_blank" href="tradus/lotr.html">J.R.R. TOLKIEN'S THE LORD OF THE RINGS (SNES)</a><br />


        </p>

			<h2>Proyectos actuales</h2>

			HARVEST MOON (GB) [DETENIDO]<br />
            <hr />
            <center><a href="docs/aplica_ips/aplicaips.html" target="_blank">&iquest;No sabes c&oacute;mo aplicar un parche? Pulsa aqu&iacute;</a></center>




<?php
include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>