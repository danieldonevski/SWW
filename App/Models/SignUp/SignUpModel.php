<?php

namespace App\Models\SignUp;


class signUpModel{
    private $email;
    private $password;
    private $confPassword;
    public $activationCode;

    public function __construct($email,$password,$confPassword)
    {
//        $this->app=\Yee\Yee::getInstance();
//        $this->email = $app->request()->post("email");
//        $this->password = $app->request()->post("password");

        $this->email = $email;
        $this->password = $password;
        $this->confPassword = $confPassword;
        $this->activationCode = sha1($email);
    }
//    public function __getEmail()
//    {
//        return $this->email;
//    }
//
//    public function __getPassword()
//    {
//        return $this->password;
//    }

    public function validateEmail($email){

        if(filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
            return true;
        }
        else{
            return false;
        }

    }
    public function validatePass($pass,$confPass){
            $pass = trim($pass);
            $confPass = trim($confPass);
        if((strlen($pass) >= 6 && strlen($pass) <=20)){
          if(preg_match("#[0-9]+#",$pass) && preg_match("#[A-Z]+#",$pass)&& preg_match("#[a-z]+#",$pass)){
                if($pass == $confPass){
                    return true;
                }
            }
        }
        else{
            return false;
        }

    }

    public function validate(){
        if(!$this->validateEmail($this->email)){
            return false;
        }
       else if($this->validatePass($this->password,$this->confPassword)){
           return false;
       }
       return true;
    }
    public function CheckDB()
    {
        $app = \Yee\Yee::getInstance();
        if(!$app->db['default']->where('email', $this->email)->getOne('users') == null){
            return false;
        }
        return true;

    }

    public function Register()
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];

        $db->insert("users",
            array(
                "email"=>$this->email,
                "password"=>$this->password,
                "active"=>1,
                "signupDate"=>"2016-02-01 12:00:00",
                "ip"=>"85.187.98.103",
                "activationCode"=>$this->activationCode));

    }
}

/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 11.7.2016 г.
 * Time: 11:06
 */