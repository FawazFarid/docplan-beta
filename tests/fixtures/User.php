<?php
require_once '../../lib/AbstractDomainModel.php';
/**
 * Description of User
 *
 * @author Fawaz
 */
class User extends Model\AbstractDomainModel {
//    protected $id;
//    protected $name;
//    protected $email;
    
    public function __construct() {
        $this->setFields(array("id", "name", "email"));
    }
}
