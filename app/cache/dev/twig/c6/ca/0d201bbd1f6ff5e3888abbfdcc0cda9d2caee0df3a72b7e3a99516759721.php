<?php

/* PhotonewMainBundle:page:admin.html_1.twig */
class __TwigTemplate_c6ca0d201bbd1f6ff5e3888abbfdcc0cda9d2caee0df3a72b7e3a99516759721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:admin.html_1.twig", 2);
        $this->blocks = array(
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listeClient"]) ? $context["listeClient"] : $this->getContext($context, "listeClient")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 74
            echo "                <tr>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientNom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientPrenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientMail", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_voirClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Voir</a></td>
                    <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>
";
    }

    // line 87
    public function block_aside($context, array $blocks = array())
    {
        // line 88
        echo "    <h3>Formulaire client</h3>
    <div class=\"well\">
        <div class=\"well\">
            ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

            ";
        // line 94
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 98
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientNom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "

                ";
        // line 101
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientNom", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 105
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientNom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 110
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientPrenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "

                ";
        // line 113
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientPrenom", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 117
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientPrenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 122
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientMail", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mail"));
        echo "

                ";
        // line 125
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientMail", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 129
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientMail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 134
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientTel", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Téléphone"));
        echo "

                ";
        // line 137
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientTel", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 141
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div  class=\"form-group\">
                ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdNum", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro"));
        echo "
                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdNum", array()), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdNum", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>   

            <div class=\"form-group\">
                ";
        // line 155
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdRue", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Rue/Route"));
        echo "

                ";
        // line 158
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdRue", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 162
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdRue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
                <div class=\"form-group\">
                ";
        // line 167
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdComp", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Complément"));
        echo "

                ";
        // line 170
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdComp", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 174
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdComp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 179
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeCodepostal", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code Postal"));
        echo "

                ";
        // line 182
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeCodepostal", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 186
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeCodepostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div  class=\"form-group\">
                ";
        // line 192
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeNom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "

                ";
        // line 195
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeNom", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 199
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeNom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div  class=\"form-group\">
                ";
        // line 204
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDateInsc", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date d'inscription"));
        echo "

                ";
        // line 207
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDateInsc", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 211
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDateInsc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            ";
        // line 215
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientNom", array()), 'row');
        echo "
            ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientPrenom", array()), 'row');
        echo "
            ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientMail", array()), 'row');
        echo "
            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientTel", array()), 'row');
        echo "
            ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdNum", array()), 'row');
        echo "
            ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientAdRue", array()), 'row');
        echo "
            ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeCodepostal", array()), 'row');
        echo "
            ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), "villeNom", array()), 'row');
        echo "


            ";
        // line 228
        echo "            ";
        // line 229
        echo "
            ";
        // line 231
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Valider"));
        echo "



            ";
        // line 236
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:admin.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 236,  465 => 231,  462 => 229,  460 => 228,  454 => 222,  450 => 221,  446 => 220,  442 => 219,  438 => 218,  434 => 217,  430 => 216,  425 => 215,  418 => 211,  411 => 207,  405 => 204,  397 => 199,  390 => 195,  384 => 192,  375 => 186,  368 => 182,  362 => 179,  354 => 174,  347 => 170,  341 => 167,  333 => 162,  326 => 158,  320 => 155,  312 => 149,  307 => 147,  303 => 146,  294 => 141,  287 => 137,  281 => 134,  273 => 129,  266 => 125,  260 => 122,  252 => 117,  245 => 113,  239 => 110,  231 => 105,  224 => 101,  218 => 98,  211 => 94,  206 => 91,  201 => 88,  198 => 87,  192 => 83,  183 => 80,  179 => 79,  175 => 78,  171 => 77,  167 => 76,  163 => 75,  160 => 74,  156 => 73,  137 => 56,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  112 => 49,  108 => 48,  104 => 47,  100 => 46,  97 => 45,  93 => 44,  73 => 26,  70 => 25,  63 => 21,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 4,  11 => 2,);
    }
}
