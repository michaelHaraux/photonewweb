<?php

namespace Photonew\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder {

    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory) {
        $this->factory = $factory;
    }

    public function createBreadcrumbMenu(Request $request) {
        $menu = $this->factory->createItem('root');
        // cet item sera toujours affiché
        $menu->addChild('Vous êtes ici : Accueil', array('route' => '_accueil'));

        // crée le menu en fonction de la route
        switch ($request->get('_route')) {
            case '_testMenu':
                $menu
                        ->addChild(' > Menu')
                        ->setCurrent(true)
                // setCurrent est utilisé pour ajouter une classe css "current"
                ;
                break;
//            case 'Acme_list_post':
//                $menu
//                    ->addChild('label.list.post')
//                    ->setCurrent(true)
//                ;
//            break;
//            case 'Acme_view_post':
//                $menu->addChild('label.list.post', array(
//                    'route' => 'Acme_list_post'
//                ));
//                
//                $menu
//                    ->addChild('label.view.post')
//                    ->setCurrent(true)
//                    ->setLabel($request->get('label'))
//                    // le paramètre "label" doit être passé dans votre controller
//                    // avec $request->attributes->set('label','Mon libellé');
//                ;
//            break;
//            case 'Acme_add_comment_on_post':
//                $menu->addChild('label.list.post', array(
//                    'route' => 'Acme_list_post'
//                ));
//                
//                $menu
//                    ->addChild('label.view.post', array(
//                        'route' => 'Acme_view_post',
//                        'routeParameters' => array('slug' => $request->get('slug'))
//                        /* le paramètre "slug" est un paramètre de la route
//                           Acme_add_comment_on_post. Si votre route n'a pas de paramètre, vous
//                           devrez utiliser la méthode $request->attributes->set()
//                        */
//                    ))
//                    ->setLabel($request->get('label'))
//                ;
//                $menu
//                    ->addChild('label.add.comment')
//                    ->setCurrent(true)
//                ;                    
//            break;            
        }

        return $menu;
    }

    public function createPrimaryMenu(Request $request) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-list');

//    $menu->addChild('Home', array('route' => '_accueil'));
//    $menu->addChild('Menu', array('route' => '_testMenu'));   
//    $menu->addChild('Menu2', array('route' => 'menu_core_menu1'));
//    $menu->addChild('About', array('route' => 'menu_core_about'));
//    $menu->addChild('Help', array('route' => 'menu_core_help'));

        $menu->addChild('Home', array('label' => 'Accueil',
            'route' => '_accueil',
        ))->setAttribute('dropdown', true);
        ;

        $menu->addChild('Menu', array('label' => 'Menu',
            'route' => '_testMenu',
        ))->setAttribute('dropdown', true);
        ;






        return $menu;
    }

}
