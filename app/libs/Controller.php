<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlller
 *
 * @author Fawaz
 */
Abstract class Controller {
    public $view;
    public $viewClass;
    
    
    public function __construct(){
        $this->view = new View();
        $this->viewClass = str_replace("Controller", "", get_class($this));
    }
    
    public function Index() {
        $this->view->render($this->viewClass . "/index");
    }
}


