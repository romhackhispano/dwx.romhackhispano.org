<?php

function getRelativePath($base, $path) {
    $base = realpath($base);
    $path = realpath($path);
    if (substr($path, 0, strlen($base)) == $base) {
    	return ltrim(substr($path, strlen($base)), '\\/');
    } else {
		return $path;
    }
}

$base = __DIR__;

chdir($base);

$url = $argv[1];

preg_match('@^(.*?)(\\?.*)?$@', $url, $burl);

$realscript = realpath($burl[1]);
$script = getRelativePath($base, $realscript);

if (isset($burl[2])) {
	$_GET = parse_str(ltrim($burl[2], '?'));
}


//var_dump($burl);
//var_dump($argv);
//var_dump($_GET);
//var_dump(parse_url($script));

//$fe2 = preg_replace('@(\\?.*)$@', '', $fe);

//print_r($script);

function ereg($pattern, $subject) { return preg_match('@' . $pattern . '@', $subject); }
function eregi($pattern, $subject) { return preg_match('@' . $pattern . '@i', $subject); }

define('PHP_SELF', $PHP_SELF = $script);
//echo $PHP_SELF;
$HTTP_POST_VARS = $_POST;
$HTTP_GET_VARS = $_GET;
$HTTP_COOKIE_VARS = $_COOKIE;
$HTTP_ENV_VARS = $_ENV;

include($realscript);
