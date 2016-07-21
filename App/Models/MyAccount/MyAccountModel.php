<?php

namespace App\Models\MyAccount;

class MyAccountModel
{
    private $email;
    private $password;
    private $repeatPassword;
    private $firstName;
    private $lastName;

    public function __construct($email,$firstName,$lastName,$password, $repeatPassword)
    {
//        $this->app=\Yee\Yee::getInstance();
//        $this->email = $app->request()->post("email");
//        $this->password = $app->request()->post("password");

        $this->email = $email;
        $this->password = $password;
        $this->repeatPassword = $repeatPassword;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function validateFirstName($firstName){

        if(($firstName != null ) && ($firstName != "" )){
            return true;
        }
        else{
            return false;
        }
    }
    public function validateLastName($lastName){

        if(($lastName != null ) && ($lastName != "" )){
            return true;
        }
        else{
            return false;
        }
    }
    public function validatePass($password,$repeatPassword)
    {
        $pass = trim($password);
        $repeatPassword = trim($repeatPassword);

        if ((strlen($pass) >= 6 && strlen($pass) <= 20))
        {
            if (preg_match("#[0-9]+#", $pass) && preg_match("#[A-Z]+#", $pass) && preg_match("#[a-z]+#", $pass))
            {
                if ($pass == $repeatPassword)
                {
                    return true;
                }
                else {return false;}
            }
            else {return false;}
        }
        else
        {
            return false;
        }
    }
    public function validatePassIsEmpty($password,$repeatPassword)
    {
        $pass = trim($password);
        $repeatPassword = trim($repeatPassword);
        if(empty($pass) && empty($repeatPassword))
        {
          return true;
        }
        else
        {
            return false;
        }
    }
    public function validate()
    {
        if($this->validateFirstName($this->firstName)
            && $this->validateLastName($this->lastName)
            && $this->validatePass($this->password,$this->repeatPassword)) {
            return true;
        }
        else if($this->validateFirstName($this->firstName)
            && $this->validateLastName($this->lastName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            return true;
        }
        else if($this->validateFirstName($this->firstName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            return true;
        }
        else if($this->validateLastName($this->lastName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            return true;
        }
        else if($this->validateFirstName($this->firstName)
            && $this->validatePass($this->password,$this->repeatPassword)){
            return true;
        }
        else if($this->validateLastName($this->lastName)
            && $this->validatePass($this->password,$this->repeatPassword)){
            return true;
        }
        else if($this->validatePass($this->password,$this->repeatPassword)) {
            return true;
        }
        else {
            return false;
        }
    }
    public function updateDetails()
    {
        $app = \Yee\Yee::getInstance();
        $data = array();
       if($this->validateFirstName($this->firstName)
           && $this->validateLastName($this->lastName)
           && $this->validatePass($this->password,$this->repeatPassword))
       {
           $data = array(
               "firstName"=>$this->firstName,
               "lastName"=>$this->lastName,
               "password"=>$this->password
           );
       }
        else if($this->validateFirstName($this->firstName)
            && $this->validateLastName($this->lastName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword))
        {
            $data = array(
                "firstName"=>$this->firstName,
                "lastName"=>$this->lastName,
            );
        }
        else if($this->validateFirstName($this->firstName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            $data = array(
                "firstName"=>$this->firstName,
            );
        }
        else if($this->validateLastName($this->lastName)
            && $this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            $data = array(
                "lastName"=>$this->lastName
            );
        }
        else if($this->validateFirstName($this->firstName)
            && $this->validatePass($this->password,$this->repeatPassword)){
            $data = array(
                "firstName"=>$this->firstName,
                "password"=>$this->password
            );
        }
        else if($this->validateLastName($this->lastName)
            && $this->validatePass($this->password,$this->repeatPassword)){
            $data = array(
                "lastName"=>$this->lastName,
                "password"=>$this->password
            );
        }
        else if($this->validatePass($this->password,$this->repeatPassword)) {
            $data = array(
                "password"=>$this->password
            );
        }
        $app->db['default']->where('email', $this->email)->update('users',$data);
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 21.7.2016 г.
 * Time: 10:05
 */