<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClubnamenId
 *
 * @ORM\Table(name="clubnamen_id")
 * @ORM\Entity
 */
class ClubnamenId
{
    /**
     * @var integer
     *
     * @ORM\Column(name="club_id", type="bigint", nullable=false)
     */
    private $clubId;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255, nullable=true)
     */
    private $naam;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set clubId
     *
     * @param integer $clubId
     * @return ClubnamenId
     */
    public function setClubId($clubId)
    {
        $this->clubId = $clubId;

        return $this;
    }

    /**
     * Get clubId
     *
     * @return integer 
     */
    public function getClubId()
    {
        return $this->clubId;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return ClubnamenId
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
