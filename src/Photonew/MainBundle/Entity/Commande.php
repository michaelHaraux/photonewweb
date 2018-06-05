<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Photonew\UserBundle\Entity\User;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\CommandeRepository")
 */
class Commande {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Photonew\UserBundle\Entity\User", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    function getUser() {
        return $this->user;
    }

    function setUser(User $user) {
        $this->user = $user;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commandeDate", type="date")
     */
    private $commandeDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="commandeRef", type="integer")
     */
    private $commandeRef;
    
    /**
     * @var string
     *
     * @ORM\Column(name="commandeType", type="string", length=255)
     */
    private $commandeType;

    /**
     * @var string
     *
     * @ORM\Column(name="commandeContenu", type="string", length=255)
     */
    private $commandeContenu;

    /**
     * @var float
     *
     * @ORM\Column(name="commandePrix", type="float")
     */
    private $commandePrix;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set commandeType
     *
     * @param string $commandeType
     * @return Commande
     */
    public function setCommandeType($commandeType) {
        $this->commandeType = $commandeType;

        return $this;
    }

    /**
     * Get commandeType
     *
     * @return string 
     */
    public function getCommandeType() {
        return $this->commandeType;
    }

    /**
     * Set commandeContenu
     *
     * @param string $commandeContenu
     * @return Commande
     */
    public function setCommandeContenu($commandeContenu) {
        $this->commandeContenu = $commandeContenu;

        return $this;
    }

    /**
     * Get commandeContenu
     *
     * @return string 
     */
    public function getCommandeContenu() {
        return $this->commandeContenu;
    }

    /**
     * Set commandePrix
     *
     * @param float $commandePrix
     * @return Commande
     */
    public function setCommandePrix($commandePrix) {
        $this->commandePrix = $commandePrix;

        return $this;
    }

    /**
     * Get commandePrix
     *
     * @return float 
     */
    public function getCommandePrix() {
        return $this->commandePrix;
    }
    function getCommandeDate() {
        return $this->commandeDate;
    }

    function getCommandeRef() {
        return $this->commandeRef;
    }

    function setCommandeDate(\DateTime $commandeDate) {
        $this->commandeDate = $commandeDate;
    }

    function setCommandeRef($commandeRef) {
        $this->commandeRef = $commandeRef;
    }


}
