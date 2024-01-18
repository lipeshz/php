<?php 
namespace App\Controller\Pages;
use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page{
    /** 
     * @return string
    */
    public static function getHome(){
        $Organization = new Organization;
        $content = View::render('pages/home', [
            'nome' => $Organization->nome]);

        return parent::getPage('Home - Teste', $content);
    }
}
?>