<?php
/**
 * Description of PatientLogin
 *
 * @author Fawaz
 */
class PatientLogin extends Login{
    public function __construct() {
        parent::__construct();
        $this->role = "patient";
        $this->mapper = new Mapper\PatientMapper();
    }
    
    public static function isLoggedIn(){
        if (isset($_SESSION['login_status']) AND $_SESSION['login_status'] == 1 AND isset($_SESSION['role']) AND $_SESSION['role'] == "patient") {
            return true;
        }
        // default return
        return false;
    }
}
