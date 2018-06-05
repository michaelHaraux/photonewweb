<?php

/* ::base.html.twig */
class __TwigTemplate_95486b7dd832c830a005b545d8296bfafd32233fcf41f3fbfd941d082c69b701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>

        <meta charset=\"utf-8\">

        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\">     
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/testcss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>

    <body>
        <div class=\"container\">
            <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <div class =\"entete\">
                <section class=\"row vertical-align\">
                    <div class=\"col-md-6\"><img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photonew.jpg"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" /></div>
                    <div id=\"title\" class=\"col-md-6\">Photographie <br>&<br> Communication Publicitaire</div>
                </section>
                ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("_administration");
            echo "\" class=\"btn btn-info\" role=\"button\">Administration</a>
                ";
        }
        // line 28
        echo "
                ";
        // line 30
        echo "                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\">www.photonew.fr</a>
                        </div>
                        ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 38
        echo "                        <form class=\"navbar-form navbar-right inline-form\">
                            ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_espace", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">Espace Personnel</a>
                            ";
        }
        // line 42
        echo "                            ";
        // line 46
        echo "                        </form>
                    </div>
                </nav>

                ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"> - Changer votre mot de passe</a>
                ";
        } else {
            // line 53
            echo "                    Connectez-vous pour accéder à vôtre espace personnel <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 55
        echo "                ";
        // line 56
        echo "                <header class=\"page-header\">
                    ";
        // line 57
        echo "          
                    <h1>";
        // line 58
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</h1>
                </header>
            </div>

            <div class=\"row\">
                ";
        // line 68
        echo "
                <section class=\"col-sm-12\">
                    ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "                </section>
            </div>
            ";
        // line 75
        echo "       
            <footer class=\"row\">
                <div class=\"col-md-2\"><a href=\"https://www.facebook.com/photonew\" target=\"_blank\"> 
                        <img class=\"img-responsive\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\" height=\"50%\" />
                    </a> 
                </div>
                <div class=\"col-md-10\">
                    A propos de Photonew Contact Plan du site
                </div>
            </footer>
            ";
        // line 86
        echo "        </div>
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    </body>
</html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "Photonew";
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "
                        ";
    }

    // line 58
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "
                    ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "            <link rel=\"stylesheet\" href=\"/Tarek/view/visitor/home/bootstrap-3.2.0/js/dropdown.js\" media=\"screen\"/>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            ";
        // line 91
        echo "            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/js/js.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 92,  215 => 91,  211 => 88,  208 => 87,  203 => 71,  200 => 70,  195 => 58,  190 => 36,  187 => 35,  181 => 19,  177 => 14,  174 => 13,  169 => 95,  167 => 87,  164 => 86,  154 => 78,  149 => 75,  145 => 73,  143 => 70,  139 => 68,  131 => 58,  128 => 57,  125 => 56,  123 => 55,  117 => 53,  107 => 51,  105 => 50,  99 => 46,  97 => 42,  91 => 40,  89 => 39,  86 => 38,  84 => 35,  77 => 30,  74 => 28,  68 => 26,  66 => 25,  60 => 22,  54 => 19,  48 => 15,  46 => 13,  41 => 11,  37 => 10,  33 => 8,  25 => 1,);
    }
}
