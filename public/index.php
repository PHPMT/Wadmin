<?php
define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', __DIR__ . DS . '..');

use Respect\Config\Container;
use Respect\Rest\Router;

chdir(APP_ROOT);

$composer_autoload = APP_ROOT . DS . 'vendor' . DS . 'autoload.php';

if(false === is_file($composer_autoload))
	throw new \Exception('Por favor, instale as dependências do Composer');

require $composer_autoload;

$config = new Container(APP_ROOT . DS . 'config' . DS . 'app.ini');
$app = $config->application;

ini_set('display_errors', $app->display_errors);
error_reporting($app->error_reporting);
date_default_timezone_set($app->timezone);
setlocale(LC_ALL, 'pt_BR');
define('APP_NAME', $app->app_name);

$auth = new Common\Routine\Auth;
$authenticated = function() use($auth) {return $auth();};

$r = new Router;

$r->get('/login',  'Wadmin\Routes\Login');
$r->post('/login', 'Wadmin\Routes\Login');
$r->get('/logout', 'Wadmin\Routes\Logout');

$r->get('/',       'Wadmin\Routes\Home')->by($authenticated);

$r->any('/**', 'Wadmin\Routes\Error404');

$r->always('Accept', array(
    'text/html' => new Common\Routine\Twig($app->twig)
));