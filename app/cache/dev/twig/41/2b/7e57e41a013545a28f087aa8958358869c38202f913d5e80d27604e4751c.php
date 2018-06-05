<?php

/* PhotonewMainBundle:page:commande.html.twig */
class __TwigTemplate_412b7e57e41a013545a28f087aa8958358869c38202f913d5e80d27604e4751c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:commande.html.twig", 1);
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
                <th>Date</th>
                <th>Référence</th>
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "commandeDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandeRef", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandeType", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandeContenu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "commandePrix", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierCommande", array("iduser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "idcommande" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteCommande", array("iduser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "idcommande" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    <div class=\"well\">
        ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_administration");
        echo "\" class=\"btn btn-info\" role=\"button\">Retour</a>
    ";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  95 => 36,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  58 => 25,  54 => 24,  31 => 5,  28 => 4,  11 => 1,);
    }
}
