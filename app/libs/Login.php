<?php

class Login{
    
    private $model;
    
    public $mapper;
    
    public $errors = array();
    
    protected $role;
    
    public $messages;
    
    private $db;
    
    public function __construct(){

        $this->db = Utils::getDb();
    }

    public function logMeIn($email, $password){
        if (empty($email)) {
            $this->errors[] = "Please Enter Email.";
        } elseif (empty($password)) {
            $this->errors[] = "Please Enter Password";
        } elseif (!empty($email) && !empty($password)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->errors[] = "Invalid Email";
                return false;
            }
            $this->model = $this->mapper->findByProperty("email", $email);
            if($this->model){
               if(password_verify($password, $this->model->password)){
                   // write user data into PHP SESSION (a file on your server)
                    $_SESSION['email'] = $this->model->email;
                    $_SESSION['login_status'] = 1;
                    
                    $_SESSION['role'] = $this->role;
                    
               }else {
                   $this->errors[] = "Incorrect Email or Password";
               }
            }else{
                $this->errors[] = "email does not exist";
            }
        }
    }
    
    public function Logout(){
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        //$this->messages[] = "You have been logged out.";
    }
    
    
    
    public function getLoginErrors() {
        return $this->errors;
    }
    
    
}

