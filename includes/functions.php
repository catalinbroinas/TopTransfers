<?php
function site_url()
{
	return sprintf
	(
	    "%s://%s/TopTransfers",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}

function site_img()
{
	return sprintf
	(
	    "%s://%s/TopTransfers/img/",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}