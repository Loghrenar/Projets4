<?php

namespace GC\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informations
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Informations
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
     * @ORM\Column(name="info_desc", type="string", length=255)
     */
    private $infoDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="info_nom", type="string", length=255)
     */
    private $infoNom;


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
     * Set infoId
     *
     * @param integer $infoId
     * @return Informations
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return integer 
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set infoDesc
     *
     * @param string $infoDesc
     * @return Informations
     */
    public function setInfoDesc($infoDesc)
    {
        $this->infoDesc = $infoDesc;

        return $this;
    }

    /**
     * Get infoDesc
     *
     * @return string 
     */
    public function getInfoDesc()
    {
        return $this->infoDesc;
    }

    /**
     * Set infoNom
     *
     * @param string $infoNom
     * @return Informations
     */
    public function setInfoNom($infoNom)
    {
        $this->infoNom = $infoNom;

        return $this;
    }

    /**
     * Get infoNom
     *
     * @return string 
     */
    public function getInfoNom()
    {
        return $this->infoNom;
    }
}
