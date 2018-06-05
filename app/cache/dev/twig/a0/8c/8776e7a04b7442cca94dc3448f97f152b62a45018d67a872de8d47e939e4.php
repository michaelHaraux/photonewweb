<?php

/* PhotonewMainBundle:page:admin.html.twig */
class __TwigTemplate_a08c8776e7a04b7442cca94dc3448f97f152b62a45018d67a872de8d47e939e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:admin.html.twig", 2);
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
        return "PhotonewMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 4
    public function block_sectionTitle($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    <ul class=\"nav navbar-nav\">
        <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_accueil");
        echo "\">Accueil</a> </li>
        <li > <a href=\"";
        // line 8
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
        <li > <a href=\"";
        // line 21
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
    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h4>Visiteurs</h4>
        </caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Objet</th>
                <th>Contenu</th>
                <th>Date</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeVisiteurs"]) ? $context["listeVisiteurs"] : $this->getContext($context, "listeVisiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["visiteur"]) {
            // line 45
            echo "                <tr>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["visiteur"], "visiteurNom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["visiteur"], "visiteurPrenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["visiteur"], "visiteurMail", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["visiteur"], "message", array()), "objet", array()), "objetNom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visiteur"], "message", array()), "messageContenu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["visiteur"], "message", array()), "messageDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_reponseMessage", array("id" => $this->getAttribute($context["visiteur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Répondre</a></td>
                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteMessage", array("id" => $this->getAttribute($context["visiteur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
    <table class=\"table table-bordered table-striped table-condensed\">
        <caption>
            <h4>Clients</h4>
        </caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) ? $context["listeUsers"] : $this->getContext($context, "listeUsers")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 74
            echo "                ";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 75
                echo "                    <tr>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userNom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userPrenom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_voirClient", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">Voir</a></td>
                        <td><a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_commande", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">Commandes</a></td>
                        <td><a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierClient", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">Modifier</a></td>
                        <td><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteClient", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                    </tr>
                ";
            }
            // line 85
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>
";
    }

    // line 90
    public function block_aside($context, array $blocks = array())
    {
        // line 91
        echo "    <h3>Formulaire client</h3>


    <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Enregistrer un client</a>
";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 94,  239 => 91,  236 => 90,  230 => 86,  216 => 85,  210 => 82,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  183 => 75,  180 => 74,  163 => 73,  144 => 56,  135 => 53,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  104 => 45,  100 => 44,  80 => 26,  77 => 25,  70 => 21,  54 => 8,  50 => 7,  47 => 6,  44 => 5,  38 => 4,  32 => 3,  11 => 2,);
    }
}
