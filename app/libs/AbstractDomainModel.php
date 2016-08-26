<?php
namespace Model;
/**
 * Description of AbstractDomainModel
 *
 * @author Fawaz
 */
class AbstractDomainModel {
    
    protected $data = array();
    protected $fields = array();
    
    //validation errors
    protected $errors = array();
    
    /**
     *  * Magic setter method that allows fields to have their values set as if they
     * are public properties.
     */
    public function __set($field, $value) {
        $method = "set" . ucfirst($field);
       
        if (method_exists($this, $method) &&
            is_callable(array($this, $method))) {
            $this->$method($value);
        }else{
//            if (array_key_exists($field, $this->data)) {
//                $this->data[$field] = $value;
//            } else {
//                throw new \InvalidArgumentException("$field is not valid for this entity");
//            }
            $this->data[$field] = $value;
        } 
    }

    /**
     *  Magic getter method that looks for field within data array or for 
     * a method with name get$FieldName.
     */
    public function __get($field) {
        $method = "get" . ucfirst($field);

        if (method_exists($this, $method) &&
            is_callable(array($this, $method))){
            return $this->$method();
        }else{
//            if (array_key_exists($field, $this->data)) {
//                return $this->data[$field];
//            } else {
//                throw new \InvalidArgumentException("$field is not valid for this entity");
//            }
            return $this->data[$field];
        }       
    }
    
    protected function setFields(array $fields){
        if($fields){
           $this->fields = $fields;
           return $this; 
        }else{
            $this->fields = get_object_vars($this);
        }
        
    }
    
    /*
     * Create a clean entity from a data set.
     * 
     */
    public function load(array $data)
    {
        if ($this->fields) {
            foreach ($this->fields as $field) {
                if (array_key_exists($field, $data)) {
                    $this->data[$field] = $data[$field];
                } else {
                    throw new \Exception("Supplied row must contain the field $field");
                }
            }
        } else {
            $this->data = $data;
        }
        return $this;
    }

    /**
     * Get the entity fields
     */
    public function toArray() {
        return $this->data;
    }
    
    public function getValidationErrors(){
        return $this->errors;
    }
}
