<?php

namespace Photonew\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Photonew\MainBundle\Entity\CiviliteRepository")
 */
class Civilite
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
     * @ORM\Column(name="civiliteLabel", type="string", length=1)
     */
    private $civiliteLabel;


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
     * Set civiliteLabel
     *
     * @param string $civiliteLabel
     * @return Civilite
     */
    public function setCiviliteLabel($civiliteLabel)
    {
        $this->civiliteLabel = $civiliteLabel;

        return $this;
    }

    /**
     * Get civiliteLabel
     *
     * @return string 
     */
    public function getCiviliteLabel()
    {
        return $this->civiliteLabel;
    }
}
