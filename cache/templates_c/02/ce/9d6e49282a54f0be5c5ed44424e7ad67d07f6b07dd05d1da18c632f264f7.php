<?php

/* pages/signup.tpl */
class __TwigTemplate_02ce9d6e49282a54f0be5c5ed44424e7ad67d07f6b07dd05d1da18c632f264f7 extends Twig_Template
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
        echo "

";
        // line 3
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 4
        echo "
<div class=\"main-container\">
    <header class=\"signup\">
        <div class=\"background-image-holder parallax-background\">
            <img class=\"background-image\" alt=\"Background Image\" src=\"/css/img/hero5.jpg\">
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center\">
                    <h1 class=\"text-white\">Welcome to our amazing new service <br>sign up now and experience the pure goodness<br/>Hello <br/>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "</h1>
                </div>
            </div>

            <div class=\"row text-center\">

                <div class=\"col-sm-12 text-center\">

                    <div class=\"photo-form-wrapper clearfix\">
                        <form id=\"form\" action=\"/signup2\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-4\">
                                <input value=\"devil9682@gmail.com\" id=\"email\" class=\"form-email\" type=\"text\" name=\"email\" placeholder=\"Email Address\">
                                <div style=\"display: none\" id=\"error-email\" class=\"alert alert-danger\" role=\"alert\"></div>
                            </div>

                            <div class=\"col-md-3 col-sm-4\">
                                <input value=\"asdAsd6\" id=\"password\" class=\"form-password\" type=\"password\" name=\"password\" placeholder=\"Password\" >
                                <div style=\"display: none\" id=\"error-password\" class=\"alert alert-danger\" role=\"alert\"></div>
                            </div>

                            <div class=\"col-md-3 col-sm-4\">
                                <input value=\"asdAsd6\" id=\"confirm-password\" class=\"form-password2\" type=\"password\" name=\"confirm-password\" placeholder=\"Confirm Password\">
                                <div style=\"display: none\" id=\"error-confirm-password\" class=\"alert alert-danger\" role=\"alert\"></div>
                            </div>

                            <div class=\"col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center\">
                                <input id=\"btnSubmit\" type=\"submit\" class=\"btn btn-primary btn-filled\" value=\"Submit\">
                            </div>
                        </div>
                        </form>
                    </div>

                    <span class=\"text-white\">30 Day risk free trial - No credit card required</span>
                </div>

            </div>

        </div>
    </header>

    ";
        // line 55
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        // line 56
        echo "

";
    }

    public function getTemplateName()
    {
        return "pages/signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  83 => 55,  37 => 14,  25 => 4,  23 => 3,  19 => 1,);
    }
}
