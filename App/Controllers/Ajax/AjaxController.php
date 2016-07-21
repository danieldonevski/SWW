
<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\AjaxLogin\AjaxLoginModel;
use App\Models\MyAccount\MyAccountModel;
use App\Library\MessageHandler;

class AjaxController extends Controller
{
    /**
     * @Route('/ajax/login')
     * @Name('ajaxLogin.index')
     * @Method('POST')
     */
    public function ajaxLogin()
    {
        /** @var Yee/Yee $yee */
        $app = $this->getYee();

        $baseUrl = \Yee\Yee::getDefaultSettings();
        $email = $app->request()->post('loginEmail');
        $password = $app->request()->post('loginPassword');
        $ajax = new AjaxLoginModel($email, $password);

        if (!$ajax->validate()) {
            $error = "Failed to join, please check you pass/email";
        }
        if (isset($error)) {
            $data = array(
                "title" => "AjaxControlFail",
                'message' => $error,
                'error' => false,
//                'homePageUrl'   => $baseUrl['http://localhost/home'],
            );
            echo json_encode($data);
        } else {
            $_SESSION['isLogged'] = true;
            $_SESSION['email'] = $email;
            $data = array(
                "title" => "AjaxConSucc",
                'message' => "Hello, $email",
                'error' => true,
//                'homePageUrl'   => $baseUrl['http://localhost/home']
            );
            echo json_encode($data);
//        }
        }
    }

    /**
     * @Route('/ajax/UpdateMyAccount')
     * @Name('UpdateMyAccount.index')
     * @Method('POST')
     */
    public function postUpdateMyAccount()
    {

        $app = $this->getYee();

        $email = $_SESSION['email'];
        $firstName = $app->request()->post("editFirstName");
        $lastName = $app->request()->post("editLastName");
        $password = $app->request()->post("editPassword");
        $repeatPassword = $app->request()->post("editRepeatPassword");

        $model = new MyAccountModel($email, $firstName, $lastName, $password, $repeatPassword);

        if (!$model->validate()) {
            $error = "Failed to join, please check you pass/email";
        }
        if (isset($error)) {
            $data = array(
                "title" => "AjaxControlFail",
                'message' => $error,
                'error' => false,
//                'homePageUrl'   => $baseUrl['http://localhost/home'],
            );
            echo json_encode($data);
        } else {
            $model->updateDetails();
            $data = array(
                "title" => "AjaxConSucc",
                'message' => "Hello, $email",
                'error' => true,
//                'homePageUrl'   => $baseUrl['http://localhost/home']
            );
            echo json_encode($data);
        }
    }
}