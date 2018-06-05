<?php

/* PhotonewMainBundle:page:contact.html.twig */
class __TwigTemplate_7053fe66822a56ecc48b8a9714f0f15d9092e594b4e977f5b873e98f6cf35d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PhotonewMainBundle::clientLayout.html.twig", "PhotonewMainBundle:page:contact.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'sectionTitle' => array($this, 'block_sectionTitle'),
            'menu' => array($this, 'block_menu'),
            'aside' => array($this, 'block_aside'),
            'photonewBundle_body' => array($this, 'block_photonewBundle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PhotonewMainBundle::clientLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 4
        echo "    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/js/googleMap.js"), "html", null, true);
        echo "\"></script>
    <script src=\" http://maps.google.com/?file=api&v=2.x&key=AIzaSyD9Sz2GqS_VL2QQkgjKaXvZ7FiUhgk30dY\" type=\"text/javascript\"></script>


";
    }

    // line 10
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 11
    public function block_sectionTitle($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav navbar-nav\">
        <li > <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_accueil");
        echo "\">Accueil</a> </li>
        <li> <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_testMenu");
        echo "\">Studio Photographique</a> </li>
        <li> <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_communication");
        echo "\">Communication Publicitaire</a> </li>
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-user icon-white\"></i> Professionnels<b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <a href=\"\">Studio Photo</a>
                </li>
                <li>
                    <a href=\"\">Studio Info</a>
                </li> 
            </ul>
        </li>
        <li class=\"active\"> <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a> </li>
    </ul>

";
    }

    // line 32
    public function block_aside($context, array $blocks = array())
    {
        // line 33
        echo "    <div>Se rendre chez Photonew</div><BR><BR>
    <div id=\"map_mezy\"></div>  

    <a  class=\"btn btn-info\" role=\"button\"href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_map");
        echo "\" style=\"display: block; width: 100%;\">Itineraire!</a>
";
    }

    // line 39
    public function block_photonewBundle_body($context, array $blocks = array())
    {
        // line 40
        echo "
    <h3>Formulaire de contact</h3>

    <div class=\"well\">
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 47
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 51
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurNom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "

            ";
        // line 54
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurNom", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 58
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurNom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 63
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurPrenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "

            ";
        // line 66
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurPrenom", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 70
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurPrenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 75
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurMail", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mail"));
        echo "

            ";
        // line 78
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurMail", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 82
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurMail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 87
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurTel", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Téléphone"));
        echo "

            ";
        // line 90
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurTel", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 94
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div  class=\"form-group\">
            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "objet", array()), "objetNom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Objet"));
        echo "
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "objet", array()), "objetNom", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "objet", array()), "objetNom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>   

        <div class=\"form-group\">
            ";
        // line 108
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageContenu", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Votre message"));
        echo "

            ";
        // line 111
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageContenu", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 115
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageContenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div style=\"display: none\" class=\"form-group\">
            ";
        // line 121
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageDate", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date"));
        echo "

            ";
        // line 124
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageDate", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 128
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 134
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurNom", array()), 'row');
        echo "
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurPrenom", array()), 'row');
        echo "
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurMail", array()), 'row');
        echo "
        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurTel", array()), 'row');
        echo "
        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "objet", array()), "objetNom", array()), 'row');
        echo "
        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageContenu", array()), 'row');
        echo "
        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), "messageDate", array()), 'row');
        echo "

        ";
        // line 145
        echo "        ";
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Valider"));
        echo "



        ";
        // line 153
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 153,  315 => 148,  312 => 146,  310 => 145,  305 => 140,  301 => 139,  297 => 138,  293 => 137,  289 => 136,  285 => 135,  280 => 134,  271 => 128,  264 => 124,  258 => 121,  249 => 115,  242 => 111,  236 => 108,  228 => 102,  223 => 100,  219 => 99,  210 => 94,  203 => 90,  197 => 87,  189 => 82,  182 => 78,  176 => 75,  168 => 70,  161 => 66,  155 => 63,  147 => 58,  140 => 54,  134 => 51,  127 => 47,  122 => 44,  116 => 40,  113 => 39,  107 => 36,  102 => 33,  99 => 32,  91 => 28,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  62 => 12,  56 => 11,  50 => 10,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  11 => 1,);
    }
}
