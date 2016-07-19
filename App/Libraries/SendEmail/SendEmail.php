<?php
namespace App\Libraries\SendEmail;

class SendEmail{

    private $sender;
    private $receiver;
    private $template;
    private $data;
    private $htmlmessage;
    private $subject;


    public function __construct($sender,$receiver,$template,$data,$subject)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->template = $template;
        $this->subject = $subject;
        $this->data = $data;
        return $this;
    }

    function createEmail()
    {
        $app = \Yee\Yee::getInstance();

        $app->view()->appendData($this->data);
        //I make render in View public!!!!
        $this->htmlmessage = $app->view()->render('mail/'.$this->template.'.tpl');
        return $this;

    }
    public function sendEmail(){
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        $header .= 'From: <' . $this->sender . ">" . "\r\n";
        $header .= "Cc: myboss@example.com" . "\r\n";

        mail($this->receiver,$this->subject, $this->htmlmessage, $header);
    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 14.7.2016 г.
 * Time: 9:24
 */