<?php 
namespace App\Controller\Pages;
use App\Utils\View;
use App\Model\Entity\Organization;

class Teste extends Page{
    public static function getTeste(){
        $Organization = new Organization;
        $content = View::render('pages/paginaTeste',[
            'name' => $Organization->nome,
            'site' => $Organization->site,
            'sobre' => $Organization->sobre
        ]);

        return parent::getPage('Teste', $content);
    }
}
?>