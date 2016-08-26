<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author Fawaz
 */
class ErrorController extends Controller{
    public function __construct() {
        parent::__construct();
        $this->index();
    }
}
