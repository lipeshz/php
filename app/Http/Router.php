<?php 
namespace App\Http;

class Router{
    /**
     * URL do projeto
     * @var string
     */
    private $url = '';

    /**
     * Prefixo das rotas
     * @var string
     */
    private $prefix = '';

    /**
     * índice das rotas
     * @var array
     */
    private $routes = [];

    /**
     * @var Request
     */

     private $request;

     /**
      * Método que inicia a classe
      */
     public function __construct($url){
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
     }

     /**
      * Define o prefixo das rotas
      */
     private function setPrefix(){
        $parseUrl = parse_url($this->url);

        $this->prefix = $parseUrl['path'] ?? ''; /**Parei na configuração do router */
     }

}
?>