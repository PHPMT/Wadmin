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

$r = new Router;

$r->get('/',  'Wadmin\Routes\GenericRoute');
$r->get('/*', 'Wadmin\Routes\GenericRoute');

$r->always('Accept', array(
    'text/html' => new Common\Routine\Twig($app->twig)
));