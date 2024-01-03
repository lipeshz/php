<?php 
require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;
use \App\Http\Router;

define('URL', 'http://localhost/php');

$obRouter = new Router(URL);
echo "<pre>";
print_r($obRouter);
echo "</pre>";
exit;

echo Home::getHome();
?>
