<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\ObjetRepository")
 */
class Objet {

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
     * @ORM\Column(name="objetNom", type="string", length=255)
     */
    private $objetNom;

    function getObjetNom() {
        return $this->objetNom;
    }

    function setObjetNom($objetNom) {
        $this->objetNom = $objetNom;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

//    /**
//     * toString
//     * @return string
//     */
//    public function __toString() {
//        return $this->getObjetNom();
//    }

}
