<?php

class DoctorController extends Controller{
    
    public function index() {
        if (!DoctorLogin::isLoggedIn()) {
            $this->view->render("templates/login");
            if (isset($_POST["login"])) {
                $login = new DoctorLogin();
                $login->logMeIn($_POST['email'], $_POST['password']);
                $errors = $login->getLoginErrors();
                if($errors){
                    print_r($errors);
                }
                //return $errors;
            }
        } else {
            $this->view->render("Doctor/index");
        }
    }

}

