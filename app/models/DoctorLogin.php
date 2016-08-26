<?php
/**
 * Description of DoctorLogin
 *
 * @author Fawaz
 */
class DoctorLogin extends Login{
    public function __construct() {
        parent::__construct();
        $this->role = "doctor";
        $this->mapper = new Mapper\DoctorMapper();
    }
    
    public static function isLoggedIn(){
        if (isset($_SESSION['login_status']) AND $_SESSION['login_status'] == 1 AND isset($_SESSION['role']) AND $_SESSION['role'] == "doctor") {
            return true;
        }
        // default return
        return false;
    }
}
