<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Portifolio
 *
 * @author elder
 */
class Helpers {
    
    public function getItemPortifolio($title = '', $group='', $img='', $description=''){
        $html = "<li class=\"item-thumbs span3 {$group} \">                                     
                <a class=\"hover-wrap fancybox\" data-fancybox-group=\"eccomerce\" title=\"{$title}\" href=\"include/img/work/full/{$img}.jpg \">
                    <span class=\"overlay-img\"></span>
                    <span class=\"overlay-img-thumb font-icon-plus\"></span>
                </a>                                        
                <img src=\"include/img/work/thumbs/($img)_thumbs.jpg\" alt=\"{$description}\">
            </li>
            ";                       
        return $html;        
    }
}
