<?php
/**
 * Description of Register
 *
 * @author Fawaz
 */
class RegisterController extends Controller{
    private $model;
    private $mapper;
    
    public function __construct(){
        parent::__construct();
    }

    public function createUser(){
        
        $this->model= new Model\Patient();
        $this->mapper = new Mapper\PatientMapper();
        
        $this->view->render("Patient/new-patient");
        
        if(isset($_POST['submit_add_patient'])){
            $this->model->id = "";
            $this->model->first_name = $_POST['first_name'];
            $this->model->middle_name = $_POST['middle_name'];
            $this->model->last_name = $_POST['last_name'];
            $this->model->gender = $_POST['gender'];
            $this->model->dob = $_POST['day']."-".$_POST['month']."-".$_POST['year'];
            $this->model->city_id = $_POST['city'];
            $this->model->email = $_POST['email'];
            $this->model->password = $_POST['password'];
            $this->model->registered_on = date("d-m-Y");
            
            //insert details into database
            $this->mapper->save($this->model);
        }
    }
    
    public function createDoctor(){
        $this->model= new Model\Doctor();
        $this->mapper = new Mapper\DoctorMapper();
        
        $this->view->render("Doctor/add-doctor");
        
        
        if(isset($_POST['submit_add_doctor'])){
            $this->model->id = "";
            $this->model->first_name = $_POST['first_name'];
            $this->model->middle_name = $_POST['middle_name'];
            $this->model->last_name = $_POST['last_name'];
            $this->model->gender = $_POST['gender'];
            $this->model->dob = $_POST['day']."-".$_POST['month']."-".$_POST['year'];
            $this->model->specialty_id = $_POST['specialty'];
            $this->model->qualification = $_POST['qualification'];
            $this->model->city_id = $_POST['city'];
            $this->model->address = $_POST['address'];
            $this->model->email = $_POST['email'];
            $this->model->password = $_POST['password'];
            $this->model->registered_on = date("d-m-Y");
            
            //comment out for debugging
            //print_r($this->model);
            
            //insert details into database
            $this->mapper->save($this->model);
        }
    }
}
