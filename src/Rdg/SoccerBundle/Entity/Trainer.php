<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer")
 * @ORM\Entity
 */
class Trainer
{
    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=25, nullable=true)
     */
    private $achternaam;

    /**
     * @var string
     *
     * @ORM\Column(name="voorvoegsel", type="string", length=20, nullable=true)
     */
    private $voorvoegsel;

    /**
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=25, nullable=true)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="geboorteplaats", type="string", length=50, nullable=true)
     */
    private $geboorteplaats;

    /**
     * @var string
     *
     * @ORM\Column(name="vorige_clubs", type="string", length=50, nullable=true)
     */
    private $vorigeClubs;

    /**
     * @var string
     *
     * @ORM\Column(name="club_na_twente", type="string", length=50, nullable=true)
     */
    private $clubNaTwente;

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
     * @var string
     *
     * @ORM\Column(name="nationaliteit", type="string", length=50, nullable=true)
     */
    private $nationaliteit;

    /**
     * @var string
     *
     * @ORM\Column(name="fctwente_periode", type="string", length=35, nullable=true)
     */
    private $fctwentePeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="bijzonderheden", type="text", nullable=true)
     */
    private $bijzonderheden;

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
     * @return Trainer
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
     * Set voorvoegsel
     *
     * @param string $voorvoegsel
     * @return Trainer
     */
    public function setVoorvoegsel($voorvoegsel)
    {
        $this->voorvoegsel = $voorvoegsel;

        return $this;
    }

    /**
     * Get voorvoegsel
     *
     * @return string 
     */
    public function getVoorvoegsel()
    {
        return $this->voorvoegsel;
    }

    /**
     * Set voornaam
     *
     * @param string $voornaam
     * @return Trainer
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
     * @return Trainer
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
     * Set vorigeClubs
     *
     * @param string $vorigeClubs
     * @return Trainer
     */
    public function setVorigeClubs($vorigeClubs)
    {
        $this->vorigeClubs = $vorigeClubs;

        return $this;
    }

    /**
     * Get vorigeClubs
     *
     * @return string 
     */
    public function getVorigeClubs()
    {
        return $this->vorigeClubs;
    }

    /**
     * Set clubNaTwente
     *
     * @param string $clubNaTwente
     * @return Trainer
     */
    public function setClubNaTwente($clubNaTwente)
    {
        $this->clubNaTwente = $clubNaTwente;

        return $this;
    }

    /**
     * Get clubNaTwente
     *
     * @return string 
     */
    public function getClubNaTwente()
    {
        return $this->clubNaTwente;
    }

    /**
     * Set geboortedag
     *
     * @param integer $geboortedag
     * @return Trainer
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
     * @return Trainer
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
     * @return Trainer
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
     * Set nationaliteit
     *
     * @param string $nationaliteit
     * @return Trainer
     */
    public function setNationaliteit($nationaliteit)
    {
        $this->nationaliteit = $nationaliteit;

        return $this;
    }

    /**
     * Get nationaliteit
     *
     * @return string 
     */
    public function getNationaliteit()
    {
        return $this->nationaliteit;
    }

    /**
     * Set fctwentePeriode
     *
     * @param string $fctwentePeriode
     * @return Trainer
     */
    public function setFctwentePeriode($fctwentePeriode)
    {
        $this->fctwentePeriode = $fctwentePeriode;

        return $this;
    }

    /**
     * Get fctwentePeriode
     *
     * @return string 
     */
    public function getFctwentePeriode()
    {
        return $this->fctwentePeriode;
    }

    /**
     * Set bijzonderheden
     *
     * @param string $bijzonderheden
     * @return Trainer
     */
    public function setBijzonderheden($bijzonderheden)
    {
        $this->bijzonderheden = $bijzonderheden;

        return $this;
    }

    /**
     * Get bijzonderheden
     *
     * @return string 
     */
    public function getBijzonderheden()
    {
        return $this->bijzonderheden;
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
