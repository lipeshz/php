<?php 
namespace App\Http;

class Request{
    /** 
     * Método HTTP da req
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */
    private $uri;

    /**
     * Parâmetros da URL
     * @var string
     */
    private $queryParams = [];

    /**
     * Variáveis passadas no $_POST
     * @var string
     */
    private $postVars = [];

    /**
     * Cabeçalho da req
     * @var string
     */
    private $headers = [];

    /**
     * Construtor da classe Request
     */
    public function __construct(){
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Retorna o método da req
     * @return string
     */
    public function getHttpMethod(){
        return $this->httpMethod;
    }

    /**
     * Retorna a URI da req
     * @return string
     */
    public function getUri(){
        return $this->uri;
    }

    /**
     * Retorna os headers da req
     * @return array
     */
    public function getHeaders(){
        return $this->headers;
    }

    /**
     * Retorna os parâmetros da requisição
     * @return array
     */
    public function getQueryParams(){
        return $this->queryParams;
    }

     /**
     * Retorna as variáveis da URL
     * @return array
     */
    public function getPostVars(){
        return $this->postVars;
    }
}
?>