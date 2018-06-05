<?php

/* PhotonewMainBundle::layout.html.twig */
class __TwigTemplate_89885db0f68399727d3b54b108abec230f2aea019881135da5f13f05955e0984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "PhotonewMainBundle::layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'photonewBundle_body' => array($this, 'block_photonewBundle_body'),
            'aside' => array($this, 'block_aside'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
    <div class=\"col-sm-8\">
        ";
        // line 8
        $this->displayBlock('photonewBundle_body', $context, $blocks);
        // line 10
        echo "    </div>
    <div class=\" col-sm-4\">
        
            <aside>
                ";
        // line 14
        $this->displayBlock('aside', $context, $blocks);
        // line 17
        echo "            </aside>
        </div>
    </div>
";
    }

    // line 8
    public function block_photonewBundle_body($context, array $blocks = array())
    {
        // line 9
        echo "        ";
    }

    // line 14
    public function block_aside($context, array $blocks = array())
    {
        // line 15
        echo "                Aside 1
                ";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  61 => 14,  57 => 9,  54 => 8,  47 => 17,  45 => 14,  39 => 10,  37 => 8,  33 => 6,  30 => 5,  11 => 3,);
    }
}
