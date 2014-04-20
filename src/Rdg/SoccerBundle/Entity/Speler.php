<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speler
 *
 * @ORM\Table(name="speler", indexes={@ORM\Index(name="clubs_id", columns={"clubs_id"})})
 * @ORM\Entity
 */
class Speler
{
    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=25, nullable=false)
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
     * @ORM\Column(name="voornaam", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="gewicht", type="string", length=50, nullable=true)
     */
    private $gewicht;

    /**
     * @var integer
     *
     * @ORM\Column(name="fctwente_sinds", type="integer", nullable=true)
     */
    private $fctwenteSinds;

    /**
     * @var string
     *
     * @ORM\Column(name="vorige_clubs", type="string", length=25, nullable=true)
     */
    private $vorigeClubs;

    /**
     * @var string
     *
     * @ORM\Column(name="positie", type="string", length=1, nullable=true)
     */
    private $positie;

    /**
     * @var string
     *
     * @ORM\Column(name="club_na_twente", type="string", length=50, nullable=true)
     */
    private $clubNaTwente;

    /**
     * @var integer
     *
     * @ORM\Column(name="clubs_id", type="bigint", nullable=false)
     */
    private $clubsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="land_id", type="bigint", nullable=true)
     */
    private $landId;

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
     * @ORM\Column(name="lengte", type="string", length=50, nullable=true)
     */
    private $lengte;

    /**
     * @var integer
     *
     * @ORM\Column(name="rugnr", type="integer", nullable=true)
     */
    private $rugnr;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=50, nullable=true)
     */
    private $foto;

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
     * @return Speler
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
     * @return Speler
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
     * @return Speler
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
     * @return Speler
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
     * Set gewicht
     *
     * @param string $gewicht
     * @return Speler
     */
    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;

        return $this;
    }

    /**
     * Get gewicht
     *
     * @return string 
     */
    public function getGewicht()
    {
        return $this->gewicht;
    }

    /**
     * Set fctwenteSinds
     *
     * @param integer $fctwenteSinds
     * @return Speler
     */
    public function setFctwenteSinds($fctwenteSinds)
    {
        $this->fctwenteSinds = $fctwenteSinds;

        return $this;
    }

    /**
     * Get fctwenteSinds
     *
     * @return integer 
     */
    public function getFctwenteSinds()
    {
        return $this->fctwenteSinds;
    }

    /**
     * Set vorigeClubs
     *
     * @param string $vorigeClubs
     * @return Speler
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
     * Set positie
     *
     * @param string $positie
     * @return Speler
     */
    public function setPositie($positie)
    {
        $this->positie = $positie;

        return $this;
    }

    /**
     * Get positie
     *
     * @return string 
     */
    public function getPositie()
    {
        return $this->positie;
    }

    /**
     * Set clubNaTwente
     *
     * @param string $clubNaTwente
     * @return Speler
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
     * Set clubsId
     *
     * @param integer $clubsId
     * @return Speler
     */
    public function setClubsId($clubsId)
    {
        $this->clubsId = $clubsId;

        return $this;
    }

    /**
     * Get clubsId
     *
     * @return integer 
     */
    public function getClubsId()
    {
        return $this->clubsId;
    }

    /**
     * Set landId
     *
     * @param integer $landId
     * @return Speler
     */
    public function setLandId($landId)
    {
        $this->landId = $landId;

        return $this;
    }

    /**
     * Get landId
     *
     * @return integer 
     */
    public function getLandId()
    {
        return $this->landId;
    }

    /**
     * Set geboortedag
     *
     * @param integer $geboortedag
     * @return Speler
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
     * @return Speler
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
     * @return Speler
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
     * Set lengte
     *
     * @param string $lengte
     * @return Speler
     */
    public function setLengte($lengte)
    {
        $this->lengte = $lengte;

        return $this;
    }

    /**
     * Get lengte
     *
     * @return string 
     */
    public function getLengte()
    {
        return $this->lengte;
    }

    /**
     * Set rugnr
     *
     * @param integer $rugnr
     * @return Speler
     */
    public function setRugnr($rugnr)
    {
        $this->rugnr = $rugnr;

        return $this;
    }

    /**
     * Get rugnr
     *
     * @return integer 
     */
    public function getRugnr()
    {
        return $this->rugnr;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Speler
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Speler
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
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
