<?php

namespace Photonew\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Photonew\MainBundle\Entity\Visiteur;
use Photonew\MainBundle\Form\VisiteurType;
use Photonew\UserBundle\Entity\User;
use Photonew\MainBundle\Entity\Commande;
use Photonew\MainBundle\Form\CommandeType;
use Photonew\UserBundle\Form\UserType;
use FOS\UserBundle\Form\Type\RegistrationFormType;

class DefaultController extends Controller {

    /**
     * @Route("/Accueil/{name}")
     * @Template()
     */
    public function indexAction() {
//        $menu = $this->get("photonew_main.menu.primary");
//        $menu->getChild("Home")->setCurrent(true);
        $user = $this->getUser();
        if (null === $user) {
            // Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
        } else {
            // Ici, $user est une instance de notre classe User
        }
        return $this->render('PhotonewMainBundle:page:index.html.twig', array(
                    'name' => 'Mike',
                    'user' => '$user'
        ));
    }

    public function galleryAction() {

        return $this->render('PhotonewMainBundle:page:gallery.html.twig');
    }

    public function communicationAction() {

        return $this->render('PhotonewMainBundle:page:communication.html.twig');
    }

    public function espaceAction($id) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PhotonewUserBundle:User')->find($id);

        if (null === $user) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }
        // $form = $this->get('form.factory')->create(new ClientType(), $client);
        //$form = $this->createFormBuilder()->getForm();
//        if ($form->handleRequest($request)->isValid()) {
//            //$em->remove($client);
//            $em->flush();
//
//            $request->getSession()->getFlashBag()->add('info', "client supprimée.");
//
//            return $this->redirect($this->generateUrl('_administration'));
//        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:espace.html.twig', array(
                    'user' => $user,
                        //    'form' => $form->createView()
        ));

        return $this->render('PhotonewMainBundle:page:espace.html.twig');
    }

//    public function loginAction() {
//
//        return $this->render('PhotonewMainBundle:page:login.html.twig');
//    }

    public function mapAction() {
//        $menu = $this->get("photonew_main.menu.primary");
//        $menu->getChild("Home")->setCurrent(true);

        return $this->render('PhotonewMainBundle:page:testmap.html.twig');
    }

    /**
     * @Route("/testMenu")
     * @Template()
     */
    public function testmenuAction() {
//        $menu = $this->get("photonew_main.menu.primary");
//        $menu->getChild("Menu")->setCurrent(true);

        return $this->render('PhotonewMainBundle:page:studioF.html.twig');
    }

    public function adminAction(Request $request) {
//        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès non autorisé.');
        }
        $user = new User();
//        $form = $this->get('form.factory')->create(new ClientType(), $client);
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PhotonewMainBundle:Visiteur')
        ;

        $listVisiteurs = $repository->findAll();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PhotonewUserBundle:User')
        ;

        $listUsers = $repository->findAll();

//        if ($form->handleRequest($request)->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
//            return $this->redirect($this->generateUrl('_administration'));
//        }

        return $this->render('PhotonewMainBundle:page:admin.html.twig', array(
                    //                   'form' => $form->createView(),
                    'listeVisiteurs' => $listVisiteurs,
                    'listeUsers' => $listUsers)
        );
    }

    public function contactAction(Request $request) {
//        $menu = $this->get("photonew_main.menu.primary");
//        $menu->getChild("Menu")->setCurrent(true);
//        return $this->render('PhotonewMainBundle:page:contact.html.twig');
        // On crée un objet Advert
        $visiteur = new Visiteur();
//        $message = new Message();
//        $message->setmessageDate(new \Datetime());
        $form = $this->get('form.factory')->create(new VisiteurType, $visiteur);

        // On vérifie que les valeurs entrées sont correctes

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visiteur);

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('_contact'));
        }

        return $this->render('PhotonewMainBundle:page:contact.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function deleteMessageAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $visiteur = $em->getRepository('PhotonewMainBundle:Visiteur')->find($id);

        if (null === $visiteur) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($visiteur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "message supprimée.");

            return $this->redirect($this->generateUrl('_administration'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:delete.html.twig', array(
                    'visiteur' => $visiteur,
                    'form' => $form->createView()
        ));
    }

    public function reponseMessageAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $visiteur = $em->getRepository('PhotonewMainBundle:Visiteur')->find($id);
        $ms = $visiteur->getMessage()->getObjet()->getObjetNom();
        $contenu = $request->get('contenu');

        if (null === $visiteur) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $message = \Swift_Message::newInstance()
                    ->setSubject('re: ' . $ms)
                    ->setFrom('michaelharaux@gmail.com')
                    ->setTo($visiteur->getVisiteurMail())
                    //                   ->setBody($this->renderView('PhotonewMainBundle:page:reponse.html.twig', array('name' => $name)))
                    ->setBody($contenu)
            ;
            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('_administration'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:reponse.html.twig', array(
                    'visiteur' => $visiteur,
                    'form' => $form->createView()
        ));
    }

    public function deleteClientAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $user = $em->getRepository('PhotonewUserBundle:User')->find($id);

        if (null === $user) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "client supprimée.");

            return $this->redirect($this->generateUrl('_administration'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:deleteClient.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView()
        ));
    }

    public function modifierClientAction($id, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PhotonewUserBundle:User')->find($id);



        if (null === $user) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new UserType(), $user);
        //$form = $this->createFormBuilder()->getForm();
        //$commande = new Commande();

        if ($form->handleRequest($request)->isValid()) {


            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "client supprimée.");

            return $this->redirect($this->generateUrl('_administration'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:modifierClient.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView()
        ));
    }

    public function voirClientAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $user = $em->getRepository('PhotonewUserBundle:User')->find($id);

        if (null === $user) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:voirClient.html.twig', array(
                    'user' => $user,
                        //    'form' => $form->createView()
        ));
    }

    public function CommandeAction($iduser, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('PhotonewUserBundle:User')->find($iduser);

        $commandes = $em->getRepository('PhotonewMainBundle:Commande')->findBy(array('user' => $user));
        $commande = new Commande();



        $form = $this->get('form.factory')->create(new CommandeType(), $commande);

        if ($form->handleRequest($request)->isValid()) {

            //   $user->addCommande($commande);
            $commande->setUser($user);
            $em->persist($commande);



            $em->flush();


            return $this->redirect($this->generateUrl('_commande', array('iduser' => $iduser)));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:commande.html.twig', array(
                    'commandes' => $commandes,
                    'user' => $user,
                    'form' => $form->createView()
        ));
    }

    public function deleteCommandeAction($idcommande, $iduser, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        //      $user = $em->getRepository('PhotonewUserBundle:User')->find($iduser);
        $commande = $em->getRepository('PhotonewMainBundle:Commande')->find($idcommande);
        $user = $em->getRepository('PhotonewUserBundle:User')->find($iduser);
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($commande);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "client supprimée.");

            return $this->redirect($this->generateUrl('_commande', array('iduser' => $iduser)));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:deleteCommande.html.twig', array(
                    'commande' => $commande,
                    'user' => $user,
                    'form' => $form->createView()
        ));
    }

    public function modifierCommandeAction($iduser, $idcommande, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('PhotonewMainBundle:Commande')->find($idcommande);
        $user = $em->getRepository('PhotonewUserBundle:User')->find($iduser);
        $commandes = $em->getRepository('PhotonewMainBundle:Commande')->findBy(array('user' => $iduser));

        if (null === $user) {
            throw new NotFoundHttpException("Le visiteur d'id " . $id . " n'existe pas.");
        }
        $form = $this->get('form.factory')->create(new CommandeType(), $commande);
        //$form = $this->createFormBuilder()->getForm();
        //$commande = new Commande();

        if ($form->handleRequest($request)->isValid()) {


            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "client supprimée.");

            return $this->redirect($this->generateUrl('_commande', array('id' => $iduser)));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('PhotonewMainBundle:page:Commande.html.twig', array(
                    'commande' => $commande,
                    'commandes' => $commandes,
                    'user' => $user,
                    'form' => $form->createView()
        ));
    }

}
