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


<h1>DOCUMENTOS</h1>
<p>En esta sección encontrarás algunos documentos que escribí sobre romhacking, si 
hay algo que no entiendas o simplemente quieres hacer una corrección o crítica 
no dudes en enviarme un mail.</p>
			<p><a href="docs/traduccion.zip">Guía de traducción de Roms</a> (ZIP, documentos en HTML) <a target="_blank" href="traduccion/index.html"> VER EN L&Iacute;NEA</a><br>
			 Explica básicamente como traducir Roms, comienza desde lo más básico 
			hasta llegar a temas más avanzados como punteros o scripts.</p>
			<p><a href="docs/asm_nes.zip">Curso de ASM 6502</a> (ZIP, 
            documentos en HTML) <a href="docs/asm_nes/" target="_blank">VER EN LÍNEA</a><br />
			 Explica cómo programar el procesador 6502 (utilizado por la NES) 
            desde los temas más básicos hasta saltos y branches.</p>
			<p><a href="docs/crear_rom_nes.txt">Cómo crear una ROM de NES en ASM 6502</a> (TXT) o <a href="docs/crear_rom_nes.zip">ZIP</a><br>
			 Explica cómo crear una ROM de NES en 6502, también explica el 
			funcionamiento de varios registros de video.</p>
			<p><a href="docs/opcodes6502.txt">Opcodes del 6502</a> (TXT) o <a href="docs/op6502.zip">ZIP</a><br>
			 Listado de opcodes e instrucciones del 6502.</p>
			<p><a href="docs/hacks6502.txt">Como hacer hacks de valores en 6502</a> (TXT) o <a href="docs/hacks6502.zip">ZIP</a><br>
			 Explica cómo hacer hacks de valores (números) en Roms de NES, cómo hacer 
			que la energía de un personaje no baje, empezar con más vidas, etc.</p>
			<p><a href="docs/65816basico.txt">Tutorial básico de ASM 65816</a> (TXT) o <a href="docs/65816b.zip">ZIP</a><br>
			 Básicas del ASM 65816, operaciones binarias, opcodes, algunas 
			instrucciones (las esenciales).</p>
			<p><a href="docs/opcodes65816.txt">Opcodes del 65816</a> (TXT) o <a href="docs/op65816.zip">ZIP</a><br>
			 Lista de opcodes e instrucciones del 65816.</p>



<?php

include("modulos/pie_de_pagina.php");
?>

</div>  <!-- Cierra división "contenido" -->

</body>
</html>