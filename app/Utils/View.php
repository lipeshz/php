<?php 
namespace App\Utils;

class View{

    /**
     * Variáveis da view
     * @var array
     */
    private static $vars = [];

    /**
     * Define os dados da classe
     * @param array
     */
    public static function init($vars = []){
        self::$vars = $vars;
    }
    /**
     * Retorna o conteúdo da view
     * @param string
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : 'ERROR 404';
    }

    /**
     * Retorna o conteúdo renderizado (do servidor) da view
     * @param string $view
     * @param array $vars (string/number)
     * @return string
     */
     public static function render($view, $vars = []){
        // Conteúdo
        $contentView = self::getContentView($view);
        
        // Une duas arrays
        $vars  = array_merge(self::$vars, $vars);

        // Chaves dos arrays (índice)
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        // Retorna o conteúdo
        return str_replace($keys, array_values($vars), $contentView);
     }
}
?>