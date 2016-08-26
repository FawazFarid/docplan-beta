<?php
namespace Mapper;
/**
 *Abstracts away all of the logic required for pulling in data from a specified table.
 *
 * @author Fawaz Farid
 */
 class AbstractDataMapper {
    protected $db;
    protected $entityTable;
    protected $identity;
    protected $model;

    public function getDb(){
        if ($this->db !== null) {
            return $this->db;
        }
        $config = \Config::getConfig("database");
        try {
            
            $this->db = new \DatabaseLibrary\Database($config['dsn'], $config['username'], $config['password']);
            
        } catch (Exception $ex) {
            throw new Exception('Database connection error: ' . $ex->getMessage());
        }
        return $this->db;
    }
    
    public function findById($id){
        $this->getDb()->select($this->entityTable, array('id' => $id));
        
        $row = $this->db->fetch();
        
        if (!$row) {
            return null;
        }

        return $this->createEntity($row);
    }
    
    public function findByProperty($property, $value){
        $this->getDb()->select($this->entityTable, array("$property" => $value));
        
        $row = $this->db->fetch();
        
        if (!$row) {
            return null;
        }

        return $this->createEntity($row);
        
    }
    
    public function findAll(array $conditions = array()){
        $entities = array();
        $this->getDb()->select($this->entityTable, $conditions);
        $rows = $this->getDb()->fetchAll();

        if ($rows) {
            foreach ($rows as $row) {
                $entities[] = $this->createEntity($row);
            }
        }
        
    }
    
    //create an entity(implementation delegated to concrete mappers)
    protected function createEntity(array $row){
        if (!$row) {
            return null;
        }
        
        $entity = $this->model;
        $entity->load($row);
        
        return $entity;
    }
    
    public function insert($entity){
        
        $id = $this->getDb()->insert($this->entityTable, $entity->toArray());
        return $id;
    }
    
    
    public function update(\Model\AbstractDomainModel $entity){
        $this->getDb()->update($this->entityTable, $entity->toArray(), "id = $entity->id");
        return $this;
                
    }
    
    public function save(\Model\AbstractDomainModel $entity){
        $updatedEntity = clone $entity;
        $existingEntity = $this->findById($entity->id);
        
        if ($existingEntity) {
           $this->update($updatedEntity);
        } else {
            $this->insert($entity);
        }
        return $this;
        
    }
    
    public function delete(\Model\AbstractDomainModel $entity){
        $this->getDb()->delete($this->entityTable, "id = $entity->id");
        return $this;
    }
}
