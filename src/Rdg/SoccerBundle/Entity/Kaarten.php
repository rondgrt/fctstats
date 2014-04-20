<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kaarten
 *
 * @ORM\Table(name="kaarten", indexes={@ORM\Index(name="wedstrijd_id", columns={"wedstrijd_id"}), @ORM\Index(name="speler_id", columns={"speler_id"}), @ORM\Index(name="soortkaart_id", columns={"soortkaart_id"})})
 * @ORM\Entity
 */
class Kaarten
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
     * @var integer
     *
     * @ORM\Column(name="soortkaart_id", type="integer", nullable=false)
     */
    private $soortkaartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="minuut", type="integer", nullable=true)
     */
    private $minuut;

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
     * @return Kaarten
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
     * @return Kaarten
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
     * Set soortkaartId
     *
     * @param integer $soortkaartId
     * @return Kaarten
     */
    public function setSoortkaartId($soortkaartId)
    {
        $this->soortkaartId = $soortkaartId;

        return $this;
    }

    /**
     * Get soortkaartId
     *
     * @return integer 
     */
    public function getSoortkaartId()
    {
        return $this->soortkaartId;
    }

    /**
     * Set minuut
     *
     * @param integer $minuut
     * @return Kaarten
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
