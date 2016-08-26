<?php

/**
 * Automatically loads all classes
 *
 * @author Fawaz
 */
class ClassLoader {

    public static function loadClass($name) {
        $classes = array(
            'Config' => APP.'config/Config.php',
            //Libs
            'Bootstrap' => APP.'libs/Bootstrap.php',
            'Controller' => APP.'libs/Controller.php',
            'Mapper\AbstractDataMapper' => APP.'libs/AbstractDataMapper.php',
            'DatabaseLibrary\DatabaseAdapterInterface' => APP.'libs/DatabaseAdapterInterface.php',
            'DatabaseLibrary\Database' => APP.'libs/Database.php',
            'Model\AbstractDomainModel' => APP.'libs/AbstractDomainModel.php',
            'Utils' => APP.'libs/Utils.php',
            'View' => APP.'libs/view.php',
            
            //Load Login Modules
            'Login' => APP.'libs/Login.php',
            'PatientLogin' => APP.'models/PatientLogin.php',
            'DoctorLogin' => APP.'models/DoctorLogin.php',
            
            //Models
            'Model\Patient' => APP.'models/Patient.php',
            'Mapper\PatientMapper' => APP.'mapping/PatientMapper.php',
            'Model\Doctor' => APP. 'models/Doctor.php',
            'Mapper\DoctorMapper' => APP.'mapping/DoctorMapper.php',
            
        );
        if (!array_key_exists($name, $classes)) {
            die('Class "' . $name . '" not found.');
        }
        require_once $classes[$name];
    }

}
