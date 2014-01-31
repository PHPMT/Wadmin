<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;

class Error404 implements Routable
{
	public function get()
	{
	    header('HTTP/1.1 404 Not Found');
	    die("<pre>Página não encontrada</pre>");
	}
}