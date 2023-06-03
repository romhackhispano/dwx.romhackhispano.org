<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-language" content="es" />

<?php
if(!$PHP_SELF){
	if($HTTP_POST_VARS) 	{extract($HTTP_POST_VARS, EXTR_PREFIX_SAME, "post_");}
	if($HTTP_GET_VARS)  	{extract($HTTP_GET_VARS, EXTR_PREFIX_SAME, "get_");}
	if($HTTP_COOKIE_VARS)	{extract($HTTP_COOKIE_VARS, EXTR_PREFIX_SAME, "cookie_");}
	if($HTTP_ENV_VARS)	 	{extract($HTTP_ENV_VARS, EXTR_PREFIX_SAME, "env_");}
}
if($PHP_SELF == ""){ $PHP_SELF = $HTTP_SERVER_VARS[PHP_SELF]; }
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="sp">
<head>
<title>DaRKWiZaRDX translations</title>
<link href="estilo.css" type="text/css" rel="stylesheet" />
</head>
<?php
include("modulos/head2.php");
?>
<body>
<?php
include("modulos/encabezado.php");
include("modulos/secciones2.php");
?>
<div id="contenido">
<?php
 Echo "<h1>NOTICIAS</h1>";
 $number = "3";
 $template = "dwx";
 include("cutenews/show_news.php");
 include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>
