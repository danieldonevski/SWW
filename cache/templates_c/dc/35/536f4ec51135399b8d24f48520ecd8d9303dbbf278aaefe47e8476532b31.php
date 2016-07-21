<?php

/* pages/myAccount.tpl */
class __TwigTemplate_dc35536f4ec51135399b8d24f48520ecd8d9303dbbf278aaefe47e8476532b31 extends Twig_Template
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
    <header class=\"page-header resume-header\">
        <div class=\"background-image-holder parallax-background\">
            <img class=\"background-image\" alt=\"Background Image\" src=\"/css/img/hero21.jpg\">
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h1 class=\"text-white space-bottom-medium\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "email"), "html", null, true);
        echo "</h1>
                    <span>Web &amp; Interaction Designer</span>
                    <ul class=\"social-icons\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_twitter\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_facebook\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_instagram\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_dribbble\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                        <div class=\"photo-form-wrapper clearfix\">
                            <form action=\"/ajax/UpdateMyAccount\" method=\"post\">
                                <!--<input id=\"email\" name=\"email\" class=\"form-email\" type=\"text\" disabled value=\"\">-->
                                <input id=\"email\" name=\"email\" class=\"form-email\" type=\"text\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "email"), "html", null, true);
        echo "\" disabled>

                                <input id=\"editFirstName\" name=\"editFirstName\" class=\"form-editFirstName\" type=\"text\" placeholder=\"First Name\">
                                <input id=\"editLastName\" name=\"editLastName\" class=\"form-editLastName\" type=\"text\" placeholder=\"Last Name\">
                                <input id=\"editPassword\" name=\"editPassword\" class=\"form-editPassword\" type=\"text\" placeholder=\"Password\">
                                <input id=\"editrepeatPassword\" name=\"editRepeatPassword\" class=\"form-repeatPassword\" type=\"text\" placeholder=\"Repeat Password\">
                                <input class=\"login-btn btn-filled\" type=\"submit\" value=\"Edit\">
                             </form>
                        <div/>
                    </div>
                </div>
        </div>
    </header>
</div>

";
        // line 59
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/myAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 59,  68 => 44,  32 => 11,  21 => 2,  19 => 1,);
    }
}
