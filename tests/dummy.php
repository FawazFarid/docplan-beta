<?php
require_once '../config/Config.php';
require_once '../lib/Database.php';
require_once '../lib/AbstractDataMapper.php';
require_once '../lib/AbstractDomainModel.php';

class User extends \Model\AbstractDomainModel{
    
    
    public function __construct() {
        $this->setFields(array('id', 'name', 'email'));
        //$this->fields = array("id","name", "email");
    }
}


class UserMapper extends \Mapper\AbstractDataMapper{
    protected $entityTable = "users";
    
    public function __construct() {
        $this->model = new User();
    }
}
class Dummy extends \PHPUnit_Framework_TestCase{
    public $model;
    public $mapper;

    public function setUp() {
        $this->model = new User();
        $this->mapper = new UserMapper();
    }

    public function testInsertNewModel() {
        $this->model->id = "";
        $this->model->name = "Reeham";
        $this->model->email = "Reeham@email.com";
        
        //$this->mapper->insert($this->model);
    }

    public function testFindByIdReturnsModel() {
//        $model = $this->mapper->findById("5");
//        $this->assertSame("Raika", $model->name);
    }
    
    public function testFindAllReturnsModels(){
        $models = $this->mapper->findAll();
    }
    
    public function testUpdate(){
//        $model = $this->mapper->findById(4);
//        $model->name = "Fatma";
//        $model->email = "Fatma@alwaily.com";
//        $this->mapper->update($model);
//        
//        $newEntity = $this->mapper->findById(4);
//        $this->assertSame("Fatma", $newEntity->name);
    }
    
    public function  testSaveInsertsCorrectly(){
        //Uncomment to run test
//        $model = new User();
//        $model->id="";
//        $model->name = "Muhammad";
//        $model->email = "Muhammad@email.com";
//        
//        $this->mapper->save($model);
//        
//        $entity = $this->mapper->findById(8);
//        $this->assertSame("Muhammad", $entity->name);
    }
    
    public function testSaveUpdatesCorrectly(){
//        $model = $this->mapper->findById(6);
//        $model->name = "Rania";
//        $model->email = "Rania@email.com";
//
//        $this->mapper->save($model);
//        
//        $newEntity = $this->mapper->findById(6);
//        $this->assertSame("Rania", $newEntity->name);
    }
    
    public function testDelete(){
        $model = $this->mapper->findById(8);
        $this->mapper->delete($model);
        
        $freshModel = $this->mapper->findById(8);
        $this->assertNull($freshModel);
    }

}