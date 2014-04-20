<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScheidsrechterId
 *
 * @ORM\Table(name="scheidsrechter_id")
 * @ORM\Entity
 */
class ScheidsrechterId
{
    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=50, nullable=true)
     */
    private $achternaam;

    /**
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=50, nullable=true)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="geboorteplaats", type="string", length=50, nullable=true)
     */
    private $geboorteplaats;

    /**
     * @var integer
     *
     * @ORM\Column(name="geboorteland_id", type="bigint", nullable=true)
     */
    private $geboortelandId;

    /**
     * @var integer
     *
     * @ORM\Column(name="geboortedag", type="integer", nullable=true)
     */
    private $geboortedag;

    /**
     * @var integer
     *
     * @ORM\Column(name="geboortemaand", type="integer", nullable=true)
     */
    private $geboortemaand;

    /**
     * @var integer
     *
     * @ORM\Column(name="geboortejaar", type="integer", nullable=true)
     */
    private $geboortejaar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set achternaam
     *
     * @param string $achternaam
     * @return ScheidsrechterId
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string 
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Set voornaam
     *
     * @param string $voornaam
     * @return ScheidsrechterId
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string 
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set geboorteplaats
     *
     * @param string $geboorteplaats
     * @return ScheidsrechterId
     */
    public function setGeboorteplaats($geboorteplaats)
    {
        $this->geboorteplaats = $geboorteplaats;

        return $this;
    }

    /**
     * Get geboorteplaats
     *
     * @return string 
     */
    public function getGeboorteplaats()
    {
        return $this->geboorteplaats;
    }

    /**
     * Set geboortelandId
     *
     * @param integer $geboortelandId
     * @return ScheidsrechterId
     */
    public function setGeboortelandId($geboortelandId)
    {
        $this->geboortelandId = $geboortelandId;

        return $this;
    }

    /**
     * Get geboortelandId
     *
     * @return integer 
     */
    public function getGeboortelandId()
    {
        return $this->geboortelandId;
    }

    /**
     * Set geboortedag
     *
     * @param integer $geboortedag
     * @return ScheidsrechterId
     */
    public function setGeboortedag($geboortedag)
    {
        $this->geboortedag = $geboortedag;

        return $this;
    }

    /**
     * Get geboortedag
     *
     * @return integer 
     */
    public function getGeboortedag()
    {
        return $this->geboortedag;
    }

    /**
     * Set geboortemaand
     *
     * @param integer $geboortemaand
     * @return ScheidsrechterId
     */
    public function setGeboortemaand($geboortemaand)
    {
        $this->geboortemaand = $geboortemaand;

        return $this;
    }

    /**
     * Get geboortemaand
     *
     * @return integer 
     */
    public function getGeboortemaand()
    {
        return $this->geboortemaand;
    }

    /**
     * Set geboortejaar
     *
     * @param integer $geboortejaar
     * @return ScheidsrechterId
     */
    public function setGeboortejaar($geboortejaar)
    {
        $this->geboortejaar = $geboortejaar;

        return $this;
    }

    /**
     * Get geboortejaar
     *
     * @return integer 
     */
    public function getGeboortejaar()
    {
        return $this->geboortejaar;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
