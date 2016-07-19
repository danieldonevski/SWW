<?php

/* pages/login.tpl */
class __TwigTemplate_f02227d5213c618684c21fe32255d1233ef04336fc58de14a9bf26a630fdc112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "<div class=\"main-container\">
    <section class=\"no-pad login-page fullscreen-element\">
<br/><br/>

        <div class=\"background-image-holder\">
            <img class=\"background-image\" alt=\"Poster Image For Mobiles\" src=\"/css/img/hero6.jpg\">
        </div>

        <div class=\"container align-vertical\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                    <h1 class=\"text-white\">Login to continue</h1>
                    <div class=\"photo-form-wrapper clearfix\">
                        <form id=\"loginForm\">
                            <input id=\"email\" name=\"loginEmail\" class=\"form-email\" type=\"text\" placeholder=\"Email Address\" value=\"email@gmail.com\">
                            <div style=\"display: none\" id=\"error-email\" class=\"alert alert-danger\" role=\"alert\"></div>
                            <input id=\"password\" name=\"loginPassword\"class=\"form-password\" type=\"password\" placeholder=\"Password\" value=\"asdAsd6\">
                            <div style=\"display: none\" id=\"error-password\" class=\"alert alert-danger\" role=\"alert\"></div>
                            <input  class=\"login-btn btn-filled\"  type=\"submit\" value=\"Login\">
                        </form>
                    </div>
                    <a href=\"/signup\" class=\"text-white\">Create an account ➞</a><br>
                    <a href=\"#\" class=\"text-white\">I've forgotten my password</a>
                </div>
            </div>
        </div>
    </section>
</div>
";
        // line 30
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 30,  21 => 2,  19 => 1,);
    }
}
