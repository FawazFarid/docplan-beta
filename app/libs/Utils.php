<?php

/**
 * Description of Utils
 *
 * @author Fawaz
 */
class Utils {
    public static $db;
    
    public static function getDb(){
        $config = \Config::getConfig("database");
        try {
            
            $db = new \DatabaseLibrary\Database($config['dsn'], $config['username'], $config['password']);
            
        } catch (Exception $ex) {
            throw new Exception('Database connection error: ' . $ex->getMessage());
        }
        return $db;
    }
    
    public static function getListOfKenyanCities(){
        $cities = array();
        $cities = self::getDb()->select("cities")->fetchAll();
        sort($cities);
        return $cities;
    }
    
    //Calculate age from given date of birth
    public static function calculateAge($dob){
        if (!empty($dob)) {
            $dob = new DateTime($dob);
            $today = new DateTime('today');

            $age = $dob->diff($today)->y;
            return $age;
        }
    }
    
    public static function getSpecialties(){
        $specialties = array();
        $specialties = self::getDb()->select("specialty")->fetchAll();
        sort($specialties);
        return $specialties;
    }
}
