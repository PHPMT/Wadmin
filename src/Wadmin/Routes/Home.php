<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;

class Home implements Routable
{
	
	public function get()
	{
		return [
				'view' => 'home.twig'
			];
	}
}