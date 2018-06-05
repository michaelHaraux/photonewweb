<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Visiteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\VisiteurRepository")
 */
class Visiteur {

    /**
     * @ORM\OneToOne(targetEntity="Photonew\MainBundle\Entity\Message", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $message;

    function getMessage() {
        return $this->message;
    }

    function setMessage(Message $message = null) {
        $this->message = $message;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="visiteurNom", type="string", length=255)
     * @Assert\Length(min=3, minMessage="votre Nom doit faire au moins {{ limit }} caractères.")
     * @Assert\Regex("#^([a-z]+(( |')[a-z]+)*)+([-]([a-z]+(( |')[a-z]+)*)+)*$#iu")
     */
    private $visiteurNom;

    /**
     * @var string
     *
     * @ORM\Column(name="visiteurPrenom", type="string", length=255)
     * @Assert\Length(min=3, minMessage="votre Nom doit faire au moins {{ limit }} caractères.")
     */
    private $visiteurPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="visiteurMail", type="string", length=255)
     */
    private $visiteurMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="visiteurTel", type="integer")
     */
    private $visiteurTel;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set visiteurNom
     *
     * @param string $visiteurNom
     * @return Visiteur
     */
    public function setVisiteurNom($visiteurNom) {
        $this->visiteurNom = $visiteurNom;

        return $this;
    }

    /**
     * Get visiteurNom
     *
     * @return string 
     */
    public function getVisiteurNom() {
        return $this->visiteurNom;
    }

    /**
     * Set visiteurPrenom
     *
     * @param string $visiteurPrenom
     * @return Visiteur
     */
    public function setVisiteurPrenom($visiteurPrenom) {
        $this->visiteurPrenom = $visiteurPrenom;

        return $this;
    }

    /**
     * Get visiteurPrenom
     *
     * @return string 
     */
    public function getVisiteurPrenom() {
        return $this->visiteurPrenom;
    }

    /**
     * Set visiteurMail
     *
     * @param string $visiteurMail
     * @return Visiteur
     */
    public function setVisiteurMail($visiteurMail) {
        $this->visiteurMail = $visiteurMail;

        return $this;
    }

    /**
     * Get visiteurMail
     *
     * @return string 
     */
    public function getVisiteurMail() {
        return $this->visiteurMail;
    }

    /**
     * Set visiteurTel
     *
     * @param integer $visiteurTel
     * @return Visiteur
     */
    public function setVisiteurTel($visiteurTel) {
        $this->visiteurTel = $visiteurTel;

        return $this;
    }

    /**
     * Get visiteurTel
     *
     * @return integer 
     */
    public function getVisiteurTel() {
        return $this->visiteurTel;
    }

}
