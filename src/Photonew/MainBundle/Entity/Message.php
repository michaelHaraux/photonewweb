<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\MessageRepository")
 */
class Message {

    
/**
   * @ORM\OneToOne(targetEntity="Photonew\MainBundle\Entity\Objet", cascade={"persist","remove"})
   */
    private $objet;

    function getObjet() {
        return $this->objet;
    }

    function setObjet(Objet $objet = null) {
        $this->objet = $objet;
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
     * @ORM\Column(name="messageContenu", type="string", length=255)
     */
    private $messageContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="messageDate", type="date")
     */
    private $messageDate;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }



    /**
     * Set messageContenu
     *
     * @param string $messageContenu
     * @return Message
     */
    public function setMessageContenu($messageContenu) {
        $this->messageContenu = $messageContenu;

        return $this;
    }

    /**
     * Get messageContenu
     *
     * @return string 
     */
    public function getMessageContenu() {
        return $this->messageContenu;
    }

    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     * @return Message
     */
    public function setMessageDate($messageDate) {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime 
     */
    public function getMessageDate() {
        return $this->messageDate;
    }

}
