<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL', 'http://localhost/php');

View::init([
    'URL' => URL
]);

$obRouter = new Router(URL);

// Inclui as rotas
include __DIR__.'/routes/pages.php';

$obRouter->run()->sendResponse();

/**
 * DEBUG
 * echo "<pre>";
 * print_r($x);
 * echo "</pre>";
 * exit;
 */
?>
