<?php
namespace Common\Routine;

use Twig_Environment;

class Twig
{
	/**
	 * \Twig_Environment
	 */
	protected $twig;
	
	function __construct(Twig_Environment $twig)
	{
		$this->twig = $twig;
	}

	public function __invoke($data = null)
	{
		if (is_string($data)) {
            return $data;
        }
        if (is_null($data)) {
            return '';
        }

        if (!is_array($data) || !isset($data['view'])) {
            return $data;
        }

        return $this->twig->render($data['view'], $data);
	}
}