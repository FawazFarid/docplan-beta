<?php
namespace Model;
/**
 * Description of doctor
 *
 * @author Fawaz
 */
class Doctor extends AbstractDomainModel{
    public function __construct() {
        $this->setFields(array(
            "id",
            "first_name",
            "middle_name",
            "last_name",
            "specialty_id",
            "qualification",
            "email",
            "password",
            "dob",
            "gender",
            "city_id",
            "address",
            "clinic_name",
            "mobile_no",//
            "registered_on",
            "rating"//
        ));
    }
    
    public function getFirst_name(){
        return $this->data['first_name'];
    }
    
    public function setFirst_name($first_name){
        if(empty($first_name)){
            $this->errors[] = "First name is empty";
        }
        $first_name = \filter_var($first_name, FILTER_SANITIZE_STRING);
        if($first_name == ""){
            $errors[] = "Please Enter A Valid first Name";
        }
        $this->data['first_name'] = ucwords($first_name);
    }
    
    public function getMiddle_name(){
        return $this->data['middle_name'];
    }
   
    public function setMiddle_name($middle_name){
        if(empty($middle_name)){
            $this->errors[] = "Middle name is empty";
        }
        $middle_name = \filter_var($middle_name, FILTER_SANITIZE_STRING);
        if($middle_name == ""){
            $errors[] = "Please Enter A Valid  Surname";
        }
        $this->data['middle_name'] = ucwords($middle_name);
    }
    
    public function getLast_name(){
        return $this->data['last_name'];
    }
    
    public function setLast_name($last_name){
        $this->data['last_name'] = $last_name;
    }
    
    public function getGender() {
     return $this->data['gender'];   
    }
    
    public function setGender($gender) {
        $this->data['gender'] = $gender;
    }
    
    public function getDob() {
        return $this->data['dob'];
    }
    
    public function setDob($dob) {
        $this->data['dob'] = $dob;
    }
    
    public function getEmail(){
        return $this->data['email'];
    }
    
    public function setEmail($email){
        if(empty($email)){
            $this->errors[] = "Please Enter Email";
        }
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->errors[] = "Invalid Email";
        }
        $this->data['email'] = $email;
    }
    
    public function getPassword(){
        return $this->data['password'];
    }
    
    public function setPassword($password){
        if(empty($password)){
            $this->errors[] = "Please Enter Password";
        }
        $this->data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getMobile_no(){
        return $this->data['mobile_no'];
    }
    
    public function setMobile_no($mobile_no){
        $this->data['mobile_no'] = $mobile_no;
    }
    
    public function getQualification(){
        return $this->data['qualification'];
    }
    
    public function setQualification($qualification){
        $qualification = \filter_var($qualification, FILTER_SANITIZE_STRING);
        if($qualification == ""){
            $errors[] = "Please Enter A Valid first Name";
        }
        $this->data['qualification'] = ucwords($qualification);
    }
}
