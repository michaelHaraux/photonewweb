<?php

/* PhotonewMainBundle:page:reponse.html.twig */
class __TwigTemplate_e0515c58f6a20716f5ca2b681f7eef117967176b8ba04d5b8c6024fcbc67ed31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:reponse.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PhotonewMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <h2>Répondre au message de ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "visiteurPrenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "visiteurNom", array()), "html", null, true);
        echo " </h2>
  
  <p>
    Objet: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "message", array()), "objet", array()), "objetNom", array()), "html", null, true);
        echo "\" 
  </p>
  
  ";
        // line 13
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_reponseMessage", array("id" => $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    
    <textarea type=\"textarea\" id=\"contenu\" name=\"contenu\"></textarea><BR>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_administration");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour aux messages
    </a>
    ";
        // line 21
        echo "    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-default\" />
    ";
        // line 23
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  62 => 21,  55 => 16,  48 => 13,  42 => 9,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
