<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opstelling
 *
 * @ORM\Table(name="opstelling", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Opstelling
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="volgorde", type="integer", nullable=false)
     */
    private $volgorde;

    /**
     * @var integer
     *
     * @ORM\Column(name="wedstrijd_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $wedstrijdId;

    /**
     * @var integer
     *
     * @ORM\Column(name="speler_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spelerId;



    /**
     * Set id
     *
     * @param integer $id
     * @return Opstelling
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set volgorde
     *
     * @param integer $volgorde
     * @return Opstelling
     */
    public function setVolgorde($volgorde)
    {
        $this->volgorde = $volgorde;

        return $this;
    }

    /**
     * Get volgorde
     *
     * @return integer 
     */
    public function getVolgorde()
    {
        return $this->volgorde;
    }

    /**
     * Set wedstrijdId
     *
     * @param integer $wedstrijdId
     * @return Opstelling
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
     * @return Opstelling
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
}
