<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\VilleRepository")
 */
class Ville
{
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
     * @ORM\Column(name="villeNom", type="string", length=255)
     */
    private $villeNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeCodepostal", type="integer")
     */
    private $villeCodepostal;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set villeNom
     *
     * @param string $villeNom
     * @return Ville
     */
    public function setVilleNom($villeNom)
    {
        $this->villeNom = $villeNom;

        return $this;
    }

    /**
     * Get villeNom
     *
     * @return string 
     */
    public function getVilleNom()
    {
        return $this->villeNom;
    }

    /**
     * Set villeCodepostal
     *
     * @param integer $villeCodepostal
     * @return Ville
     */
    public function setVilleCodepostal($villeCodepostal)
    {
        $this->villeCodepostal = $villeCodepostal;

        return $this;
    }

    /**
     * Get villeCodepostal
     *
     * @return integer 
     */
    public function getVilleCodepostal()
    {
        return $this->villeCodepostal;
    }
}
