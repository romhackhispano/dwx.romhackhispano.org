<?php

$explored = [];

$explore = [
	'principal.php'
];

function phpLinkToHtmlLink($link) {
	return preg_replace_callback('@^(.*)(\\.php)(\\?(.*))?$@', function($e) {
		if (isset($e[4])) {
			$out = @$e[1] . '_' . $e[4] . '.html';
		} else {
			$out = $e[1] . '.html';
		}
		return str_replace(['&', '='], '_', $out);
	}, $link);
}

function scanAndReplaceLinks($content) {
	$links = [];
	return [
		'links' => &$links,
		'content' => preg_replace_callback('@href=\"(.*?)\"@', function($e) use (&$links) {
			//print_r($e);
			$link = htmlspecialchars_decode($e[1]);
			$links[] = $link;
			return 'href="' . htmlspecialchars(phpLinkToHtmlLink($link)) . '"';
		}, $content)
	];
}

$base = __DIR__;

chdir($base);

while (count($explore) > 0) {
	$e = array_shift($explore);
	if (isset($explored[$e])) continue;
	$explored[$e] = true;
	$fe = $base . '/' . $e;
	$fo = $base . '/' . phpLinkToHtmlLink($e);
	$fe2 = preg_replace('@(\\?.*)$@', '', $fe);
	echo "$fe\n";
	//$fe = $e;
	//$fo = phpLinkToHtmlLink($e);
	if ($fe == $fo) {
		//echo "$fe != $fo\n";
		continue;
	}
	if (!file_exists($fe2)) continue;
	$rawContent = shell_exec(escapeshellcmd('php') . ' ' . escapeshellarg('@build_compat.php') . ' ' . escapeshellarg($fe));
	$info = scanAndReplaceLinks(mb_convert_encoding($rawContent, 'utf-8', 'ISO-8859-1'));
	$links = $info['links'];
	$content = $info['content'];
	foreach ($links as $link) if (!isset($explored[$link])) $explore[] = $link;
	//print_r($links);
	echo "   -> $fo\n";
	@mkdir(dirname($fo), 0777, true);
	file_put_contents($fo, $content);
	//print_r($explore);
}