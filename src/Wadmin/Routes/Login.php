<?php
namespace Wadmin\Routes;

use Respect\Rest\Routable;
use \InvalidArgumentException as Argument;

class Login implements Routable
{

	public function get()
	{
		if(isset($_SESSION['email']))
	        header('Location: /');

		return [
				'view' => 'loginPage.twig'
			];
	}

	public function post()
	{
		try {
            $email     = filter_var(filter_input(INPUT_POST, 'email'), FILTER_VALIDATE_EMAIL);
	        $password  = filter_input(INPUT_POST, 'password');

	        if (!$email)
	        	throw new Argument("E-mail inválido");

	        if (empty($email) && empty($password))
	        	throw new Argument("E-mail ou senha inválido.");
	    	
	    	$_SESSION['email'] = $_POST['email'];

	        header('Location: /');
        } catch(Argument $e) {
			return [
				'view'    => 'loginPage.twig',
				'message' => $e->getMessage()
			];
        }
	}
}
