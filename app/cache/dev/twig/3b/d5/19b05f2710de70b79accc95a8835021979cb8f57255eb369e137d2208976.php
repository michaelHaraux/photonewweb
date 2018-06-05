<?php

/* PhotonewMainBundle:page:communication.html.twig */
class __TwigTemplate_3bd519b05f2710de70b79accc95a8835021979cb8f57255eb369e137d2208976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PhotonewMainBundle::layout.html.twig", "PhotonewMainBundle:page:communication.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sectionTitle' => array($this, 'block_sectionTitle'),
            'menu' => array($this, 'block_menu'),
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

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Communication Publicitaire";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
    <title>jQuery Lightbox Image Thumbnail Gallery</title>
    <link rel=\"stylesheet\" href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
    }

    // line 11
    public function block_sectionTitle($context, array $blocks = array())
    {
        echo "Communication Publicitaire";
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
        <li > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_testMenu");
        echo "\">Studio Photographique</a> </li>
        <li class=\"active\"> <a href=\"";
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
        <li > <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\"\">Contact</a> </li>
    </ul>
";
    }

    // line 31
    public function block_photonewBundle_body($context, array $blocks = array())
    {
        // line 32
        echo "
    <div class=\"row\">
        <section class=\"col-sm-12\">
            <div id=\"blueimp-gallery\" class=\"blueimp-gallery\">
                <div class=\"slides\"></div>
                <h3 class=\"title\"></h3>
                <a class=\"prev\">‹</a>
                <a class=\"next\">›</a>
                <a class=\"close\">×</a>
                <a class=\"play-pause\"></a>
                <ol class=\"indicator\"></ol>
            </div>
            <div id=\"links\">
                <div id=\"wrapper\">
                    <div id=\"content\">
                        <h1></h1>

                        <div class=\"photos\">
                            <ul class=\"clearfix\">
                                <!-- ATTRIBUTION: http://dribbble.com/shots/963800-New-App-design -->
                                <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/01-app-design-iphone.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                                        <img class=\"img-responsive\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/01-app-design-iphone-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
                                    </a></li>
                                <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/02-ios-side-navigation.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                                        <img class=\"img-responsive\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/02-ios-side-navigation-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
                                    </a></li>
                                <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/03-share-buttons-ios.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                                        <img class=\"img-responsive\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/03-share-buttons-ios-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
                                    </a></li>
                            </ul>
                        </div>

                    </div> <!-- /end #content -->


                </div>
            </div>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js\"></script>
            <script src=\"js/bootstrap-image-gallery.min.js\"></script>
            <script>
                document.getElementById('links').onclick = function (event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement,
                            link = target.src ? target.parentNode : target,
                            options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
                    blueimp.Gallery(links, options);
                };
            </script>


            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"row\">
                        <article class=\"col-sm-6\">
                            Detail Article
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:communication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  142 => 58,  137 => 56,  133 => 55,  128 => 53,  124 => 52,  102 => 32,  99 => 31,  92 => 28,  77 => 16,  73 => 15,  69 => 14,  66 => 13,  63 => 12,  57 => 11,  50 => 8,  46 => 7,  41 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
