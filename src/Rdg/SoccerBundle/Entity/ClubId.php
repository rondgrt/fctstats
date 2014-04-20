<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClubId
 *
 * @ORM\Table(name="club_id")
 * @ORM\Entity
 */
class ClubId
{
    /**
     * @var string
     *
     * @ORM\Column(name="stad", type="string", length=50, nullable=true)
     */
    private $stad;

    /**
     * @var integer
     *
     * @ORM\Column(name="land_id", type="bigint", nullable=false)
     */
    private $landId;

    /**
     * @var string
     *
     * @ORM\Column(name="clubnaam", type="string", length=200, nullable=true)
     */
    private $clubnaam;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set stad
     *
     * @param string $stad
     * @return ClubId
     */
    public function setStad($stad)
    {
        $this->stad = $stad;

        return $this;
    }

    /**
     * Get stad
     *
     * @return string 
     */
    public function getStad()
    {
        return $this->stad;
    }

    /**
     * Set landId
     *
     * @param integer $landId
     * @return ClubId
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
     * Set clubnaam
     *
     * @param string $clubnaam
     * @return ClubId
     */
    public function setClubnaam($clubnaam)
    {
        $this->clubnaam = $clubnaam;

        return $this;
    }

    /**
     * Get clubnaam
     *
     * @return string 
     */
    public function getClubnaam()
    {
        return $this->clubnaam;
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
