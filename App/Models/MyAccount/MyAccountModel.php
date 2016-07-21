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

    public function validateNames($firstName,$lastName){

        if(($firstName != null && $lastName != null) && ($firstName != "" && $lastName != "")){
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
        if(empty($pass) || empty($repeatPassword))
        {
            return true;
        }
        else{
            if ((strlen($pass) >= 6 && strlen($pass) <= 20))
            {
                if (preg_match("#[0-9]+#", $pass) && preg_match("#[A-Z]+#", $pass) && preg_match("#[a-z]+#", $pass))
                {
                    if ($pass == $repeatPassword)
                    {
                        return true;
                    }
                }
            }
            else
            {
                return false;
            }
        }
    }
    public function validatePassIsEmpty($password,$repeatPassword)
    {
        $pass = trim($password);
        $repeatPassword = trim($repeatPassword);
        if(empty($pass) || empty($repeatPassword))
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
        if(!$this->validateNames($this->firstName,$this->lastName))
        {
            return false;
        }
        else if($this->validatePass($this->password,$this->repeatPassword))
        {
            return false;
        }
        return true;
    }
    public function updateDetails()
    {
        $app = \Yee\Yee::getInstance();
        if($this->validatePassIsEmpty($this->password,$this->repeatPassword)){
            $app->db['default']->where('email',$this->email)->update('users',
                array(
                    "firstName"=>$this->firstName,
                    "lastName"=>$this->lastName
                )
            );
        }
        else {
            $app->db['default']->where('email', $this->email)->update('users',
                array(
                    "password" => $this->password,
                    "firstName" => $this->firstName,
                    "lastName" => $this->lastName
                )
            );
        }
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 21.7.2016 г.
 * Time: 10:05
 */