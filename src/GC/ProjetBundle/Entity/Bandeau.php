<?php

namespace GC\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bandeau
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Bandeau
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
     * @ORM\Column(name="band_nom", type="string", length=255)
     */
    private $bandNom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="band_heure", type="date")
     */
    private $bandHeure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="band_duree", type="time")
     */
    private $bandDuree;


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
     * Set bandNom
     *
     * @param string $bandNom
     * @return Bandeau
     */
    public function setBandNom($bandNom)
    {
        $this->bandNom = $bandNom;

        return $this;
    }

    /**
     * Get bandNom
     *
     * @return string 
     */
    public function getBandNom()
    {
        return $this->bandNom;
    }

    /**
     * Set bandHeure
     *
     * @param \DateTime $bandHeure
     * @return Bandeau
     */
    public function setBandHeure($bandHeure)
    {
        $this->bandHeure = $bandHeure;

        return $this;
    }

    /**
     * Get bandHeure
     *
     * @return \DateTime 
     */
    public function getBandHeure()
    {
        return $this->bandHeure;
    }

    /**
     * Set bandDuree
     *
     * @param \DateTime $bandDuree
     * @return Bandeau
     */
    public function setBandDuree($bandDuree)
    {
        $this->bandDuree = $bandDuree;

        return $this;
    }

    /**
     * Get bandDuree
     *
     * @return \DateTime 
     */
    public function getBandDuree()
    {
        return $this->bandDuree;
    }
}
