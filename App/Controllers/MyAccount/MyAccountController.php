<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
class MyAccountController extends Controller
{
    /**
     * @Route('/myAccount')
     * @Name('my.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();


        if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){

                $javascript = array(

            );

            $data = array(
                'title' => 'My Account',
                'javascript' => $javascript
            );

            $app->render('pages/myAccount.tpl', $data);
        } else{
            $app->redirect('/');
        }
    }
}

/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 21.7.2016 г.
 * Time: 9:32
 */