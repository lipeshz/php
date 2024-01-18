<?php 
use \App\Controller\Pages;
use \App\Http\Response;

// Rota da HOME
$obRouter->get('/',[
    function(){
        return new Response(200, Pages\Home::getHome());
    }
]);

$obRouter->get('/sobre',[
    function(){
        return new Response(200, Pages\Sobre::getSobre());
    }
]);

$obRouter->get('/paginaTeste',[
    function(){
        return new Response(200, Pages\Teste::getTeste());
    }
]);

$obRouter->get('/pagina/{idPagina}/{acao}',[
    function($idPagina,$acao){
        return new Response(200, 'Página'.$idPagina.' - '.$acao);
    }
]);
?>