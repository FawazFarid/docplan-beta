<?php

class Bootstrap {

    private $controller;
    private $action;
    private $params;

    function __construct() {
        $this->splitUrl();

        $file = APP . 'controllers/' . $this->controller . 'Controller.php';
        // check if controller exists
        if (!$this->controller) {

            require APP . 'controllers/HomeController.php';
            $page = new HomeController();
            $page->index();
            return false;
        } elseif (file_exists($file)) {
            require $file;
            $this->controller = $this->controller."Controller";
            $this->controller = new $this->controller();

            // check for method: does such a method exist in the controller ?
            if (method_exists($this->controller, $this->action)) {

                if (!empty($this->params)) {
                    // Call the method and pass arguments to it
                    call_user_func_array(array($this->controller, $this->action), $this->params);
                } else {
                    // If no parameters are given, just call the method without parameters, like $this->home->method();
                    $this->controller->{$this->action}();
                }
            } else {
                if (strlen($this->action) == 0) {
                    // no action defined: call the default index() method of a selected controller
                    $this->controller->index();
                } else {
                    require APP . 'controllers/ErrorController.php';
                    new ErrorController();
                    return False;
                }
            }
        } else {
            require APP . 'controllers/ErrorController.php';
            new ErrorController();
            return False;
        }
    }

    public function splitUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
//            print_r($url);

            $this->controller = isset($url[0]) ? $url[0] : null;
            $this->action = isset($url[1]) ? $url[1] : null;

            //debugging
//            echo 'Controller: ' . $this->controller . '<br>';
//            echo 'Action: ' . $this->action . '<br>';
//            echo 'Parameters: ' . print_r($this->params, true) . '<br>';
        }
    }

}
