<?php
namespace Mapper;

/**
 * Description of patientMapper
 *
 * @author Fawaz Farid
 */
class PatientMapper extends AbstractDataMapper{
    protected $entityTable = "patients";
    protected $model;
    
    public function __construct() {
        $this->model = new \Model\Patient();
    }
}
