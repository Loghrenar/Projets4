<?php

namespace GC\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlist
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Playlist
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
     * @ORM\Column(name="play_nom", type="string", length=255)
     */
    private $playNom;

    /**
     * @var string
     *
     * @ORM\Column(name="play_desc", type="string", length=255)
     */
    private $playDesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="play_diff", type="date")
     */
    private $playDiff;

    /**
     * @ORM\ManyToMany(targetEntity="GC\ProjetBundle\Entity\Programmes", inversedBy="playlist")
     */
    private $programmes;

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
     * Set playId
     *
     * @param integer $playId
     * @return Playlist
     */
    public function setPlayId($playId)
    {
        $this->playId = $playId;

        return $this;
    }

    /**
     * Get playId
     *
     * @return integer 
     */
    public function getPlayId()
    {
        return $this->playId;
    }

    /**
     * Set playNom
     *
     * @param string $playNom
     * @return Playlist
     */
    public function setPlayNom($playNom)
    {
        $this->playNom = $playNom;

        return $this;
    }

    /**
     * Get playNom
     *
     * @return string 
     */
    public function getPlayNom()
    {
        return $this->playNom;
    }

    /**
     * Set playDesc
     *
     * @param string $playDesc
     * @return Playlist
     */
    public function setPlayDesc($playDesc)
    {
        $this->playDesc = $playDesc;

        return $this;
    }

    /**
     * Get playDesc
     *
     * @return string 
     */
    public function getPlayDesc()
    {
        return $this->playDesc;
    }

    /**
     * Set playDiff
     *
     * @param \DateTime $playDiff
     * @return Playlist
     */
    public function setPlayDiff($playDiff)
    {
        $this->playDiff = $playDiff;

        return $this;
    }

    /**
     * Get playDiff
     *
     * @return \DateTime 
     */
    public function getPlayDiff()
    {
        return $this->playDiff;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->programmes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add programmes
     *
     * @param \GC\ProjetBundle\Entity\Programmes $programmes
     * @return Playlist
     */
    public function addProgramme(\GC\ProjetBundle\Entity\Programmes $programmes)
    {
        $this->programmes[] = $programmes;

        return $this;
    }

    /**
     * Remove programmes
     *
     * @param \GC\ProjetBundle\Entity\Programmes $programmes
     */
    public function removeProgramme(\GC\ProjetBundle\Entity\Programmes $programmes)
    {
        $this->programmes->removeElement($programmes);
    }

    /**
     * Get programmes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgrammes()
    {
        return $this->programmes;
    }
}
