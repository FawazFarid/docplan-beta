<?php


/**
 * Patient Controller
 *
 * @author Fawaz
 */
class PatientController extends Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->view->render('Patient/dashboard');
    }
}
