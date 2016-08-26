<?php
/**
 * @author Fawaz
 */
// TODO: check include path
//ini_set('include_path', ini_get('include_path'));


define('PATH_BASE', '/xampp/htdocs/DocPlan');

chdir(PATH_BASE);

spl_autoload_register(function($name) {

    // Autoload anything in the Docplan namespace
    if (0 === strpos("DocPlan\\", $name)) {
        $name = strreplace("\\", '/', $name);
        require $name;
    }

}, true, true);