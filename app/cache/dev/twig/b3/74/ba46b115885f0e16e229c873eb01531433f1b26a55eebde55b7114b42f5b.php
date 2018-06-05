<?php

/* PhotonewMainBundle:page:gallery.html.twig */
class __TwigTemplate_b374ba46b115885f0e16e229c873eb01531433f1b26a55eebde55b7114b42f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en-US\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
        <title>jQuery Lightbox Image Thumbnail Gallery</title>
        <link rel=\"stylesheet\" href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    </head>

    <body>
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
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/01-app-design-iphone.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                <img class=\"img-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/01-app-design-iphone-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
            </a>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/02-ios-side-navigation.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                <img class=\"img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/02-ios-side-navigation-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
            </a>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/03-share-buttons-ios.png"), "html", null, true);
        echo "\" rel=\"lightbox\" title=\"Designed by <a href='http://dribbble.com/shots/963800-New-App-design' target='_blank'>Natalia Berowska</a>\">
                <img class=\"img-responsive\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/images/photos/03-share-buttons-ios-thumb.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50%\" />
            </a>
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
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  63 => 28,  58 => 26,  54 => 25,  49 => 23,  45 => 22,  27 => 7,  19 => 1,);
    }
}
