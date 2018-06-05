<?php

namespace Photonew\UserBundle\Entity;
use Photonew\MainBundle\Entity\Commande;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Photonew\MainBundle\Entity\Ville" , cascade={"persist","remove"})
     * 
     */
    private $ville;

    function getVille() {
        return $this->ville;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    /**
     * 
     * @ORM\OneToMany(targetEntity="Photonew\MainBundle\Entity\Commande" , mappedBy="user", cascade={"persist", "remove", "merge"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    public function __construct() {
        parent::__construct();

        $this->roles = array('ROLE_USER');
        $this->commandes = new ArrayCollection();
    }

    public function addCommande(Commande $commande) {
       //   $commande->setUser($this);
//        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
//        if (!$this->commandes->contains($commande)) {
//            $this->commandes->add($commande);
//        }
        $this->commandes[] = new $commande;
        return $this;
    }

    public function removeCommande(Commande $commande) {
        $this->applications->removeElement($application);
    }

    public function getCommandes() {
        return $this->commandes;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="userNom", type="string", length=255)
     */
    private $userNom;

    /**
     * @var string
     *
     * @ORM\Column(name="userPrenom", type="string", length=255)
     */
    private $userPrenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="userTel", type="integer")
     */
    private $userTel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userDateInsc", type="date")
     */
    private $userDateInsc;

    /**
     * @var integer
     *
     * @ORM\Column(name="userAdNum", type="integer")
     */
    private $userAdNum;

    /**
     * @var string
     *
     * @ORM\Column(name="userAdRue", type="string", length=255)
     */
    private $userAdRue;

    /**
     * @var string
     *
     * @ORM\Column(name="userAdComp", type="string", length=255)
     */
    private $userAdComp;

    function getUserNom() {
        return $this->userNom;
    }

    function getUserPrenom() {
        return $this->userPrenom;
    }

    function getUserTel() {
        return $this->userTel;
    }

    function getUserDateInsc() {
        return $this->userDateInsc;
    }

    function getUserAdNum() {
        return $this->userAdNum;
    }

    function getUserAdRue() {
        return $this->userAdRue;
    }

    function getUserAdComp() {
        return $this->userAdComp;
    }

    function setUserNom($userNom) {
        $this->userNom = $userNom;
    }

    function setUserPrenom($userPrenom) {
        $this->userPrenom = $userPrenom;
    }

    function setUserTel($userTel) {
        $this->userTel = $userTel;
    }

    function setUserDateInsc(\DateTime $userDateInsc) {
        $this->userDateInsc = $userDateInsc;
    }

    function setUserAdNum($userAdNum) {
        $this->userAdNum = $userAdNum;
    }

    function setUserAdRue($userAdRue) {
        $this->userAdRue = $userAdRue;
    }

    function setUserAdComp($userAdComp) {
        $this->userAdComp = $userAdComp;
    }

}
