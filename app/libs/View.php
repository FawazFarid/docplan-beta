<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author Fawaz
 */
class View {
    public function render($view, $noIclude = false){
        if($noIclude == true){
            require APP.'views/' . $view . '.php';
        }else {
            require APP.'views/templates/header.php';
            require APP.'views/' . $view . '.php';
            require APP.'views/templates/footer.php';
        }
    }
}
