<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stand
 *
 * @ORM\Table(name="stand")
 * @ORM\Entity
 */
class Stand
{
    /**
     * @var string
     *
     * @ORM\Column(name="seizoen", type="string", length=9, nullable=false)
     */
    private $seizoen;

    /**
     * @var integer
     *
     * @ORM\Column(name="nr", type="smallint", nullable=false)
     */
    private $nr;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=35, nullable=false)
     */
    private $naam;

    /**
     * @var integer
     *
     * @ORM\Column(name="gesp", type="smallint", nullable=false)
     */
    private $gesp;

    /**
     * @var integer
     *
     * @ORM\Column(name="winst", type="smallint", nullable=false)
     */
    private $winst;

    /**
     * @var integer
     *
     * @ORM\Column(name="gelijk", type="smallint", nullable=false)
     */
    private $gelijk;

    /**
     * @var integer
     *
     * @ORM\Column(name="verlies", type="smallint", nullable=false)
     */
    private $verlies;

    /**
     * @var integer
     *
     * @ORM\Column(name="punten", type="smallint", nullable=false)
     */
    private $punten;

    /**
     * @var string
     *
     * @ORM\Column(name="doelsaldo", type="string", length=8, nullable=false)
     */
    private $doelsaldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set seizoen
     *
     * @param string $seizoen
     * @return Stand
     */
    public function setSeizoen($seizoen)
    {
        $this->seizoen = $seizoen;

        return $this;
    }

    /**
     * Get seizoen
     *
     * @return string 
     */
    public function getSeizoen()
    {
        return $this->seizoen;
    }

    /**
     * Set nr
     *
     * @param integer $nr
     * @return Stand
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return integer 
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Stand
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string 
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set gesp
     *
     * @param integer $gesp
     * @return Stand
     */
    public function setGesp($gesp)
    {
        $this->gesp = $gesp;

        return $this;
    }

    /**
     * Get gesp
     *
     * @return integer 
     */
    public function getGesp()
    {
        return $this->gesp;
    }

    /**
     * Set winst
     *
     * @param integer $winst
     * @return Stand
     */
    public function setWinst($winst)
    {
        $this->winst = $winst;

        return $this;
    }

    /**
     * Get winst
     *
     * @return integer 
     */
    public function getWinst()
    {
        return $this->winst;
    }

    /**
     * Set gelijk
     *
     * @param integer $gelijk
     * @return Stand
     */
    public function setGelijk($gelijk)
    {
        $this->gelijk = $gelijk;

        return $this;
    }

    /**
     * Get gelijk
     *
     * @return integer 
     */
    public function getGelijk()
    {
        return $this->gelijk;
    }

    /**
     * Set verlies
     *
     * @param integer $verlies
     * @return Stand
     */
    public function setVerlies($verlies)
    {
        $this->verlies = $verlies;

        return $this;
    }

    /**
     * Get verlies
     *
     * @return integer 
     */
    public function getVerlies()
    {
        return $this->verlies;
    }

    /**
     * Set punten
     *
     * @param integer $punten
     * @return Stand
     */
    public function setPunten($punten)
    {
        $this->punten = $punten;

        return $this;
    }

    /**
     * Get punten
     *
     * @return integer 
     */
    public function getPunten()
    {
        return $this->punten;
    }

    /**
     * Set doelsaldo
     *
     * @param string $doelsaldo
     * @return Stand
     */
    public function setDoelsaldo($doelsaldo)
    {
        $this->doelsaldo = $doelsaldo;

        return $this;
    }

    /**
     * Get doelsaldo
     *
     * @return string 
     */
    public function getDoelsaldo()
    {
        return $this->doelsaldo;
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
