<?php 
namespace App\Controller\Pages;
use App\Utils\View;
use App\Model\Entity\Organization;

class Sobre extends Page{
    /** 
     * @return string
    */
    public static function getSobre(){
        $Organization = new Organization;
        $content = View::render('pages/sobre', [
            'nome' => $Organization->nome,
            'site' => $Organization->site
        ]);

        return parent::getPage('Sobre', $content);
    }
}
?>