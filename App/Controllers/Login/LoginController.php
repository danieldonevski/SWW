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
    //        session_cache_limiter(false);
    //        session_start();
//        if(isset($_SESSION['ID'])==true){
//            echo $_SESSION['ID'];
//        }
        $javascript = array(
            "/css/js/login.js");

        $data = array("title" => "Login", "javascript" => $javascript);

        $app->render('pages/login.tpl', $data);
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 8.7.2016 г.
 * Time: 10:23
 */