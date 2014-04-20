<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WisselsId
 *
 * @ORM\Table(name="wissels_id", indexes={@ORM\Index(name="s_erin_w_id", columns={"speler_erin_id", "wedstrijd_id"}), @ORM\Index(name="wedstrijd_id", columns={"wedstrijd_id"})})
 * @ORM\Entity
 */
class WisselsId
{
    /**
     * @var integer
     *
     * @ORM\Column(name="speler_erin_id", type="bigint", nullable=false)
     */
    private $spelerErinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="speler_eruit_id", type="bigint", nullable=false)
     */
    private $spelerEruitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="minuut", type="integer", nullable=true)
     */
    private $minuut;

    /**
     * @var integer
     *
     * @ORM\Column(name="wedstrijd_id", type="bigint", nullable=false)
     */
    private $wedstrijdId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set spelerErinId
     *
     * @param integer $spelerErinId
     * @return WisselsId
     */
    public function setSpelerErinId($spelerErinId)
    {
        $this->spelerErinId = $spelerErinId;

        return $this;
    }

    /**
     * Get spelerErinId
     *
     * @return integer 
     */
    public function getSpelerErinId()
    {
        return $this->spelerErinId;
    }

    /**
     * Set spelerEruitId
     *
     * @param integer $spelerEruitId
     * @return WisselsId
     */
    public function setSpelerEruitId($spelerEruitId)
    {
        $this->spelerEruitId = $spelerEruitId;

        return $this;
    }

    /**
     * Get spelerEruitId
     *
     * @return integer 
     */
    public function getSpelerEruitId()
    {
        return $this->spelerEruitId;
    }

    /**
     * Set minuut
     *
     * @param integer $minuut
     * @return WisselsId
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
     * Set wedstrijdId
     *
     * @param integer $wedstrijdId
     * @return WisselsId
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
