<?php
class Index{
    public function __construct() {
        define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
        define('APP', ROOT . "app" . DIRECTORY_SEPARATOR);
        require_once APP."Config/constants.php";
        session_start();
        $this->init();
        
    }
    
    
    public function init(){
        
        require_once APP.'libs/classLoader.php';
        spl_autoload_register(array('classLoader', 'loadClass'));
        new Bootstrap();
    }

}

new Index();
