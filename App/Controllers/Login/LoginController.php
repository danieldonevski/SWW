<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;


class LoginController extends Controller
{
    /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

//        $data = array("title" => "Login",$javascript);
        $data = array("title" => "Login");

        $app->render('pages/login.tpl', $data);
    }
    /**
     * @Route('/login2')
     * @Name('post.index')
     * @Method('post')
     */
    public function postAction( )
    {


        /** @var Yee\Yee $yee */
        $app = $this->getYee();

//        $email = $app->request()->post("loginEmail");
//        $password = $app->request()->post("loginPassword");


        $data = array("title"=>"Login");

            $app->render('pages/login.tpl', $data );
    }

}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 8.7.2016 г.
 * Time: 10:23
 */