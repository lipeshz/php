<?php 
namespace App\Http;

class Response{
    /**
     * Status do HTTP (sucesso)
     * @var integer //Tipo da variável
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do RESPONSE
     * @var array;
     */
    private $headers = [];

    /**
     * Tipo de conteúdo
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteúdo do response
     * @var mixed
     */
    private $content;

    /**
     * @param integer // Tipo do parâmetro
     * @param midex
     * @param string
     */
    public function __construct($httpCode, $content, $contentType = 'text/html'){
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        $this->setContentType($contentType);
    }

    /**
     * Altera o contentType do response
     * @param string
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Adiciona um registro no cabeçalho
     * @param string
     * @param string
     */
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

    /**
     * Envia os headers para o navegador
     */
    private function sendHeaders(){
        /**
         * STATUS
         */
        http_response_code($this->httpCode);

        foreach($this->headers as $key=>$value){
            header($key.': '.$value);
        }
    }

    /**
     * Enviar a resposta para o usuário
     */
    public function sendResponse(){
        $this->sendHeaders();
        switch($this->contentType){
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
?>