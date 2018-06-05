<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\ClientRepository")
 */
class Client {

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
     * @ORM\Column(name="clientNom", type="string", length=255)
     */
    private $clientNom;

    /**
     * @var string
     *
     * @ORM\Column(name="clientPrenom", type="string", length=255)
     */
    private $clientPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="clientMail", type="string", length=255)
     */
    private $clientMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientTel", type="integer")
     */
    private $clientTel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clientDateInsc", type="date")
     */
    private $clientDateInsc;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientAdNum", type="integer")
     */
    private $clientAdNum;

    /**
     * @var string
     *
     * @ORM\Column(name="clientAdRue", type="string", length=255)
     */
    private $clientAdRue;

    /**
     * @var string
     *
     * @ORM\Column(name="clientAdComp", type="string", length=255)
     */
    private $clientAdComp;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set clientNom
     *
     * @param string $clientNom
     * @return Client
     */
    public function setClientNom($clientNom) {
        $this->clientNom = $clientNom;

        return $this;
    }

    /**
     * Get clientNom
     *
     * @return string 
     */
    public function getClientNom() {
        return $this->clientNom;
    }

    /**
     * Set clientPrenom
     *
     * @param string $clientPrenom
     * @return Client
     */
    public function setClientPrenom($clientPrenom) {
        $this->clientPrenom = $clientPrenom;

        return $this;
    }

    /**
     * Get clientPrenom
     *
     * @return string 
     */
    public function getClientPrenom() {
        return $this->clientPrenom;
    }

    /**
     * Set clientMail
     *
     * @param string $clientMail
     * @return Client
     */
    public function setClientMail($clientMail) {
        $this->clientMail = $clientMail;

        return $this;
    }

    /**
     * Get clientMail
     *
     * @return string 
     */
    public function getClientMail() {
        return $this->clientMail;
    }

    /**
     * Set clientTel
     *
     * @param integer $clientTel
     * @return Client
     */
    public function setClientTel($clientTel) {
        $this->clientTel = $clientTel;

        return $this;
    }

    /**
     * Get clientTel
     *
     * @return integer 
     */
    public function getClientTel() {
        return $this->clientTel;
    }

    /**
     * Set clientDateInsc
     *
     * @param \DateTime $clientDateInsc
     * @return Client
     */
    public function setClientDateInsc($clientDateInsc) {
        $this->clientDateInsc = $clientDateInsc;

        return $this;
    }

    /**
     * Get clientDateInsc
     *
     * @return \DateTime 
     */
    public function getClientDateInsc() {
        return $this->clientDateInsc;
    }

    /**
     * Set clientAdNum
     *
     * @param integer $clientAdNum
     * @return Client
     */
    public function setClientAdNum($clientAdNum) {
        $this->clientAdNum = $clientAdNum;

        return $this;
    }

    /**
     * Get clientAdNum
     *
     * @return integer 
     */
    public function getClientAdNum() {
        return $this->clientAdNum;
    }

    /**
     * Set clientAdRue
     *
     * @param string $clientAdRue
     * @return Client
     */
    public function setClientAdRue($clientAdRue) {
        $this->clientAdRue = $clientAdRue;

        return $this;
    }

    /**
     * Get clientAdRue
     *
     * @return string 
     */
    public function getClientAdRue() {
        return $this->clientAdRue;
    }

    /**
     * Set clientAdComp
     *
     * @param string $clientAdComp
     * @return Client
     */
    public function setClientAdComp($clientAdComp) {
        $this->clientAdComp = $clientAdComp;

        return $this;
    }

    /**
     * Get clientAdComp
     *
     * @return string 
     */
    public function getClientAdComp() {
        return $this->clientAdComp;
    }

}
