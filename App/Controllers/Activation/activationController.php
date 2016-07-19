<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class activationController extends Controller
{
    /**
     * @Route('/activation/:accode')
     * @Name('activation.index')
     */

    public function activationAction( $accode )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

//get base url
        $baseUrl = \Yee\Yee::getDefaultSettings();
        $acmodel = new ActivationModel( $accode );
        $userExist= $acmodel->CheckIfUserExists();
        if ( !$userExist )
        {
            $app->redirect('/signup',301);
        }
        var_dump( $userExist );

        $acmodel-> activateUser ( $userExist );
        $app->redirect('/login');
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 19.7.2016 г.
 * Time: 10:21
 */