<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;


class AjaxController extends Controller
{
    /**
     * @Route('/ajaxlogin')
     * @Name('ajaxlogin.index')
     */
    public function loginAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
//
//        $error = array(
//            "error"=>true,
//            "errorMessage"=>"A user with this credentials does not exist!",
//            "login"=>false
//        );
//        $email = $app->request()->post("loginEmail");
//        $password = $app->request()->post("loginPassword");
        $error = array(
            "error" => true,
            "errorMessage" => "A user with this credentials does not exist!",
            "login" => false
        );
        if ($_POST){
            $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];

        $app->db['default']->where("email", $email);
        $user = $app->db['default']->getOne("users");

        if ($user != null) {
            if ($password == $user["password"]) {
                $error["login"] = true;
                $error["error"] = false;

                echo "Login successful<br/>";
                return "successful";
//                die;
            } else {
                echo "wrong password<br/>";
                return "wrong";
//                die;

            }
        } else {
            echo "not a user <br/>";
//            die;
        }
    }
//
        $javascript = array("javascript"=>"/css/js/login.js");

        $data = array("title" => "Login","javascript"=>$javascript,"error"=>$error);

        $app->render('pages/login.tpl', $data);}
    }

//    /**
//     * @Route('/ajaxlogin')
//     * @Name('post.index')
//     */
//    public function postAction()
//    {
//        /** @var Yee\Yee $yee */
//        $app = $this->getYee();
//
//
//        if(isset($error)) {
//
//            $data = array(
//                "title"         => "AjaxControllerFail",
//                'errorMessage'  => $error,
//                'error'         => false,
////                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page
//
//            );
//            // $app->response()-headers()->set('Content-type', 'application/json');
//            echo json_encode( $data );
//
//        } else {
//
//            $data = array(
//                "title"         => "AjaxControllerSucc",
//                'succ'          => "Hello, $email",
//                'success'       => true,
//                'error'         => true);
////                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page
//            echo json_encode( $data );
//
////        echo json_encode($error);
//
//
//        $data = array("title" => "login",$error);
//
//        $app->render('pages/login.tpl', $data);
//    }
//
//}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 8.7.2016 г.
 * Time: 10:23
 */