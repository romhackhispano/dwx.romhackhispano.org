<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
	<div class="noticia">
		<span class="titulo_noticia">{title}</span>
		<div class="cuerpo_noticia">{short-story}
		</div>
		<div class="pie_noticia">
				Publicado por {author} el {date}
		</div>
	</div>
<br />

HTML;


$template_full = <<<HTML
<table border="0" width="420" cellspacing="1" cellpadding="3">
<tr>
<td width="100%" style="text-align:justify">
<b>{title}</b>
</td>
</tr>
<tr>
<td width="100%" style="text-align:justify">
<font style="font-family:georgia, verdana, arial, sans-serif;	color:#666; font-size:14;">{full-story}</font></td>
</tr>
<tr>
<td width="100%">
<table border="0" style="border-top: 1px dotted #f2f3f3" width="408" cellspacing="0">
<tr>
<i><font style="font-family:georgia, verdana, arial, sans-serif;	font-size:11;	color:black;">{date}</i> por <b>{author}</b></font><br>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br />
HTML;


$template_comment = <<<HTML
 <table border="0" width="400" height="40" cellspacing="" cellpadding="3">
    <tr>
      <td height="1" style="border-bottom-style: solid;border-bottom-width: 1px; border-bottom-color: black;">por <b>{author}</b> @ {date}</td>
    </tr>
    <tr>
      <td height="40" valign="top" bgcolor="#000000" >{comment}</td>
    </tr>
  </table>
<br>
HTML;


$template_form = <<<HTML
  <table border="0" width="342" cellspacing="0" cellpadding="0">
    <tr>
      <td width="49" height="1">
Nombre:
      </td>
      <td width="289" height="1"><input type="text" name="name" tabindex="1"></td>
    </tr>
    <tr>
      <td width="49" height="1">
E-mail:
      </td>
      <td width="289" height="1"> <input type="text" name="mail" tabindex="2"> (optional)</td>
    </tr>
  </center>
    <tr>
      <td width="51" height="1">
        <p align="left">smile:</p>
      </td>
<center>
      <td width="291" height="1" >
{smilies}
      </td>
    </tr>
    <tr>
      <td width="340" height="1" colspan="2"> <textarea cols="40" rows="6" name="comments" tabindex="3"></textarea><br />
        <input type="submit" name="submit" value="Agregar comentario" accesskey="s"> 
<center><input type=checkbox name=CNremember  id=CNremember value=1> <label for=CNremember>Recordarme</label></center> | 
  <a href="javascript:CNforget();">Olvidarme</a>
      </td>
    </tr>
  </table>

HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Recientes[/prev-link] {pages} [next-link]Antiguas >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML
<p align="center">[prev-link]<< M&aacute;s viejas[/prev-link] ({pages}) [next-link]M&aacute;as nuevas >>[/next-link]</p>
HTML;
?>
