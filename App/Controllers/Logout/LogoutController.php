<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
//use App\Models\Activation\ActivationModel;
class LogoutController extends Controller
{
    /**
     * @Route('/logout')
     * @Name('logout.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        session_unset();
        session_destroy();
        $app->redirect('/');
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 21.7.2016 г.
 * Time: 10:36
 */