<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;

class Logout implements Routable
{
	
	public function get()
	{
		session_destroy();
        header('Location: /');
	}
}
