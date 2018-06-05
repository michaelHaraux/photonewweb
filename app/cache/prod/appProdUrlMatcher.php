<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // photonew_main_default_index
        if (0 === strpos($pathinfo, '/Accueil') && preg_match('#^/Accueil/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'photonew_main_default_index')), array (  '_controller' => 'Photonew\\MainBundle\\Controller\\DefaultController::indexAction',));
        }

        // photonew_main_default_testmenu
        if ($pathinfo === '/testMenu') {
            return array (  '_controller' => 'Photonew\\MainBundle\\Controller\\DefaultController::testmenuAction',  '_route' => 'photonew_main_default_testmenu',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
