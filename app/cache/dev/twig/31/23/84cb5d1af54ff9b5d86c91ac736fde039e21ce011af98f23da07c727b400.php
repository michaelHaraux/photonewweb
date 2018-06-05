<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_312384cb5d1af54ff9b5d86c91ac736fde039e21ce011af98f23da07c727b400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 9
        echo "    
    
   ";
        // line 19
        echo "
    ";
        // line 21
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 22
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  49 => 21,  44 => 23,  41 => 21,  38 => 19,  34 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
