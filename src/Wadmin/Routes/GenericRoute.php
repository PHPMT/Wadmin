<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;

class GenericRoute implements Routable
{
	
	public function get($any = 'index')
	{
		return [
				'view' => $any . '.twig'
			];
	}
}