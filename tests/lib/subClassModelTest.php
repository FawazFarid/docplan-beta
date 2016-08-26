<?php
namespace Model;
require_once '../../lib/AbstractDomainModel.php';
/**
 *
 * @author Fawaz
 */

class Model extends AbstractDomainModel{
    public $fields = array("id", "first_name", "email");
    
    public function __construct() {
        //parent::__construct();
        $this->setFields($this->fields);  
    }
    
//    public function getName() {
//        return strtoupper($this->data['first_name']);
//    }
    
    public function setEmail($newEmail){
        $this->data['email'] = $newEmail;
    }
}


class subClassModelTest extends \PHPUnit_Framework_TestCase {
    
    private $model;
    
    public function SetUp(){
        $this->model = new Model();
    }
    
    public function testLoadThrowsExceptionIfDataIsMissing(){
        $data = array(
            'id' => 10,
            'first_name' => 'Fatma',
            'email' => 'Fatuma@email.com'
        );
        $this->model->load($data);
    }
    
    public function testToArrayFiltersExtraDataUsingFieldNames(){
        $data = array(
            'id' => 3,
            'first_name' => 'Farha',
            'email' => 'farha@alwaily.com',
            'hair' => 'Dark',
        );
        $this->model->load($data);
        $this->assertFalse(isset($this->model->hair));
    }
    
    public function testMagicGetNameMethodIsCalled()
    {
        $data = array(
            'id' => 3,
            'first_name' => 'Fawaz',
            'email' => 'fawwazali@rocketmail.com',
        );
        $this->model->load($data);
        $this->assertSame("Fawaz", $this->model->first_name);
    }
    
    public function testMagicSetNameMethodIsCalled()
    {
        $this->model->email = "fawwazally@gmail.com";
    }
}
