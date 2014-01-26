<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;

class GenericRoute implements Routable
{
	
	public function get($any = 'home')
	{
		return [
				'view'  => $any . '.twig'
			];
	}
}