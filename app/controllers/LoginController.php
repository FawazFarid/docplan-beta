<?php

/**
 * Description of Login
 *
 * @author Fawaz
 */

class LoginController extends Controller {
    public $errors;
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (!PatientLogin::isLoggedIn()) {
            $this->view->render("templates/login");
            if (isset($_POST["login"])) {
                $login = new PatientLogin();
                $login->logMeIn($_POST['email'], $_POST['password']);
                $errors = $login->getLoginErrors();
                if($errors){
                    print_r($errors);
                }
                //return $errors;
            }
        } else {
//            $this->view->render("Patient/Dashboard");
              header('location: ' . URL . 'Patient/');
        }
    }

}
