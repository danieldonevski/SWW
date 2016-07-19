<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\SignUp\SignupModel;
use App\Libraries\SendEmail\SendEmail;

class SignupController extends Controller
{
     /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */

        $app = $this->getYee();
        //        $con = mysqli_connect("localhost","root","","sww");
//        $result = $con->query("SELECT * FROM users");
//        $result = mysqli_query($con,"SELECT * FROM users");
//        mysqli_query($con,
//            "INSERT INTO users (ID,email,password,active,signupDate,ip)
//              VALUES (6,'email7@gmail.com','123456',1,'2016-02-06 12:00:00','85.187.98.103')");
//        mysqli_query($con,
//            "UPDATE users SET signupDate = '2016-02-04 12:00:00' WHERE ID = 4");
//        var_dump($result);
//        foreach ($result as $user) {
//            var_dump($user);
//            echo "<br/>";
//        }





        $header = "HA-HA-HA-HA";
        $data = array("title"=>"Sign Up","name"=>$header);

        $app->render('pages/signup.tpl', $data );
    }

    /**
     * @Route('/signup2')
     * @Name('post.index')
     * @Method('post')
     */
    public function postAction( )
    {
        $success = false;
//        die("<br/>email: " . $_POST["email"] . "<br/  > password: " . $_POST["password"]);
//        die("email: " . $_GET["email"] . "<br/  > password: " . $_GET["password"]);
//        die($app->request->isPost() ? "true" : "else");

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post("email");
        $password = $app->request()->post("password");
        $confPass = $app->request()->post("confirm-password");


        $signUpModel = new signUpModel($email,$password,$confPass);
//        echo  var_dump(sha1($email));
//        die;


        if(!$signUpModel->validate()){
            if($signUpModel->CheckDB()){
                $signUpModel->Register();
                $success = true;

            }
            else{
                echo "use another email";
            }
        }
        else{
            echo $email . " .. is not valid";
        }

        $data = array("title"=>"Sign Up","activationCode"=>$signUpModel->activationCode);
        if($success == true){
            header('Location: '.'/login');
            $app->render('pages/login.tpl', $data );
//            $sendEmail = new SendEmail("danieldonevski072@gmail.com",$email,"content",$data,"Activate Account");
//            $sendEmail->createEmail();
//            $sendEmail->sendEmail();
        }else{
            $app->render('pages/signup.tpl', $data );
        }
    }
}