<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomeController extends Controller
{
    /**
     * @Route('/(home)')
     * @Name('home.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
//        $app->add(new \Yee\Middleware\SessionCookie(array(
//            'expires' => '20 minutes',
//            'path' => '/',
//            'domain' => null,
//            'secure' => false,
//            'httponly' => false,
//            'name' => 'yee_session',
//            'secret' => 'CHANGE_ME',
//            'cipher' => MCRYPT_RIJNDAEL_256,
//            'cipher_mode' => MCRYPT_MODE_CBC
//        )));
        $data = array("title" => "Home");

        $app->render('pages/home.tpl', $data);
    }

}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 8.7.2016 г.
 * Time: 10:23
 */