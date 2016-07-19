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
        $name = "Daniel";
//        echo md5("test@test.com") . "<br>";
//        echo sha1("test@test.com");
//        die;

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