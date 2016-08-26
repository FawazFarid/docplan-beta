<?php
namespace Mapper;
/**
 * Description of DoctorMapper
 *
 * @author Fawaz
 */
class DoctorMapper extends AbstractDataMapper{
    protected $entityTable = "doctors";
    protected $model;
    
    public function __construct() {
        $this->model = new \Model\Doctor();
    }
}
