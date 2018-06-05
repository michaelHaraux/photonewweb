<?php

/* PhotonewMainBundle:page:index.html.twig */
class __TwigTemplate_b63bd1627edbac43a89a93a352616af14be725a9e9a526fde9ea4193a589b813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("PhotonewMainBundle::clientLayout.html.twig", "PhotonewMainBundle:page:index.html.twig", 3);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'sectionTitle' => array($this, 'block_sectionTitle'),
            'menu' => array($this, 'block_menu'),
            'photonewBundle_body' => array($this, 'block_photonewBundle_body'),
            'aside' => array($this, 'block_aside'),
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

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "<div >Bienvenue sur Photonew.fr</div>";
    }

    // line 5
    public function block_sectionTitle($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <ul class=\"nav navbar-nav\">
        <li class=\"active\"> <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_accueil");
        echo "\">Accueil</a> </li>
        <li> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_testMenu");
        echo "\">Studio Photographique</a> </li>
        <li> <a href=\"#\">Communication Publicitaire</a> </li>
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
        <li> <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a> </li>
    </ul>
";
    }

    // line 25
    public function block_photonewBundle_body($context, array $blocks = array())
    {
        // line 26
        echo "   
     <img class=\"img-responsive\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/vitrine.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"100%\" />
     
";
    }

    // line 30
    public function block_aside($context, array $blocks = array())
    {
        // line 31
        echo "    <img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/titre.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"100%\" />
";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  90 => 30,  83 => 27,  80 => 26,  77 => 25,  70 => 22,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 5,  32 => 4,  11 => 3,);
    }
}
