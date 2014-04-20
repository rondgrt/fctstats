<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doelpunten
 *
 * @ORM\Table(name="doelpunten", indexes={@ORM\Index(name="w_id_s_id", columns={"wedstrijd_id", "speler_id"})})
 * @ORM\Entity
 */
class Doelpunten
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wedstrijd_id", type="bigint", nullable=false)
     */
    private $wedstrijdId;

    /**
     * @var integer
     *
     * @ORM\Column(name="speler_id", type="bigint", nullable=false)
     */
    private $spelerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eigen_doelpunt", type="boolean", nullable=true)
     */
    private $eigenDoelpunt;

    /**
     * @var integer
     *
     * @ORM\Column(name="minuut", type="integer", nullable=true)
     */
    private $minuut;

    /**
     * @var integer
     *
     * @ORM\Column(name="helft", type="integer", nullable=true)
     */
    private $helft;

    /**
     * @var string
     *
     * @ORM\Column(name="stand", type="string", length=10, nullable=true)
     */
    private $stand;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeGemaaktID", type="integer", nullable=true)
     */
    private $typegemaaktid;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeAssistID", type="integer", nullable=true)
     */
    private $typeassistid;

    /**
     * @var integer
     *
     * @ORM\Column(name="assist_id", type="bigint", nullable=true)
     */
    private $assistId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set wedstrijdId
     *
     * @param integer $wedstrijdId
     * @return Doelpunten
     */
    public function setWedstrijdId($wedstrijdId)
    {
        $this->wedstrijdId = $wedstrijdId;

        return $this;
    }

    /**
     * Get wedstrijdId
     *
     * @return integer 
     */
    public function getWedstrijdId()
    {
        return $this->wedstrijdId;
    }

    /**
     * Set spelerId
     *
     * @param integer $spelerId
     * @return Doelpunten
     */
    public function setSpelerId($spelerId)
    {
        $this->spelerId = $spelerId;

        return $this;
    }

    /**
     * Get spelerId
     *
     * @return integer 
     */
    public function getSpelerId()
    {
        return $this->spelerId;
    }

    /**
     * Set eigenDoelpunt
     *
     * @param boolean $eigenDoelpunt
     * @return Doelpunten
     */
    public function setEigenDoelpunt($eigenDoelpunt)
    {
        $this->eigenDoelpunt = $eigenDoelpunt;

        return $this;
    }

    /**
     * Get eigenDoelpunt
     *
     * @return boolean 
     */
    public function getEigenDoelpunt()
    {
        return $this->eigenDoelpunt;
    }

    /**
     * Set minuut
     *
     * @param integer $minuut
     * @return Doelpunten
     */
    public function setMinuut($minuut)
    {
        $this->minuut = $minuut;

        return $this;
    }

    /**
     * Get minuut
     *
     * @return integer 
     */
    public function getMinuut()
    {
        return $this->minuut;
    }

    /**
     * Set helft
     *
     * @param integer $helft
     * @return Doelpunten
     */
    public function setHelft($helft)
    {
        $this->helft = $helft;

        return $this;
    }

    /**
     * Get helft
     *
     * @return integer 
     */
    public function getHelft()
    {
        return $this->helft;
    }

    /**
     * Set stand
     *
     * @param string $stand
     * @return Doelpunten
     */
    public function setStand($stand)
    {
        $this->stand = $stand;

        return $this;
    }

    /**
     * Get stand
     *
     * @return string 
     */
    public function getStand()
    {
        return $this->stand;
    }

    /**
     * Set typegemaaktid
     *
     * @param integer $typegemaaktid
     * @return Doelpunten
     */
    public function setTypegemaaktid($typegemaaktid)
    {
        $this->typegemaaktid = $typegemaaktid;

        return $this;
    }

    /**
     * Get typegemaaktid
     *
     * @return integer 
     */
    public function getTypegemaaktid()
    {
        return $this->typegemaaktid;
    }

    /**
     * Set typeassistid
     *
     * @param integer $typeassistid
     * @return Doelpunten
     */
    public function setTypeassistid($typeassistid)
    {
        $this->typeassistid = $typeassistid;

        return $this;
    }

    /**
     * Get typeassistid
     *
     * @return integer 
     */
    public function getTypeassistid()
    {
        return $this->typeassistid;
    }

    /**
     * Set assistId
     *
     * @param integer $assistId
     * @return Doelpunten
     */
    public function setAssistId($assistId)
    {
        $this->assistId = $assistId;

        return $this;
    }

    /**
     * Get assistId
     *
     * @return integer 
     */
    public function getAssistId()
    {
        return $this->assistId;
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
