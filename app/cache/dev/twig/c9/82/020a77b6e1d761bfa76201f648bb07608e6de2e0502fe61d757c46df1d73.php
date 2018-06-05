<?php

/* PhotonewMainBundle:page:ajoutCommande.html.twig */
class __TwigTemplate_c982020a77b6e1d761bfa76201f648bb07608e6de2e0502fe61d757c46df1d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:ajoutCommande.html.twig", 1);
        $this->blocks = array(
            'photonewBundle_body' => array($this, 'block_photonewBundle_body'),
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
    public function block_photonewBundle_body($context, array $blocks = array())
    {
        // line 5
        echo "    Commande(s) de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array()), "html", null, true);
        echo " :
    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h4>Commande(s)</h4>
            <BR>
        </caption>
        <thead>
            <tr>
                <th>Type</th>
                <th>Contenu</th>
                <th>Prix</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandeType", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandeContenu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandePrix", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierClient", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteClient", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
    <div class=\"well\">
        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_administration");
        echo "\" class=\"btn btn-info\" role=\"button\">Retour</a>
    ";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:ajoutCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  90 => 35,  85 => 32,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  56 => 23,  52 => 22,  31 => 5,  28 => 4,  11 => 1,);
    }
}
