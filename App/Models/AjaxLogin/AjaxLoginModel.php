<?php

namespace App\Models\AjaxLogin;

class AjaxLoginModel
{

    private $email;
    private $password;
    private $ajxapp;

    public function __construct($email,$password)
    {
        $this->email    =$email;
        $this->password =$password;
        $this->ajxapp   = \Yee\Yee::getInstance();
    }
    public function Ajax_emailexist()
    {
        $app = $this->ajxapp;
        $app-> db['default']->where("email",$this->email);
        $result=$app->db['default']->getOne('users');
        if($result === NULL)
        {
            return false;
        }
        return true;
    }
    public function Ajax_passcheck()
    {
        $app = $this->ajxapp;
        if ($this->Ajax_emailexist())
        {
            $user = $app->db['default']->where("email",$this->email)->getOne('users');
            if ($this->password == $user['password'])
            {
                return true;
            }
            return false;
        }
    }

    public function Ajax_activeuser()
    {
        $app= $this->ajxapp;
        $activeuser= $this->userProp();
        if ($activeuser[ 'active' ] == 1)
        {
            return true;
        }
        return false;
    }
    public function userProp()
    {
        $app= $this->ajxapp;
        return $app->db['default']-> where ("email" , $this->email)->getOne('users');
    }
    public function validate()
    {
        if($this->Ajax_emailexist() && $this->Ajax_passcheck())
        {
            return true;
        }
        return false;
    }
}

/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 19.7.2016 г.
 * Time: 10:11
 */