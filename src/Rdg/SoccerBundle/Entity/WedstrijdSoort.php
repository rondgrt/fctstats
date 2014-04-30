<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WedstrijdSoort
 *
 * @ORM\Table(name="wedstrijd_soort")
 * @ORM\Entity
 */
class WedstrijdSoort
{
    /**
     * @var string
     *
     * @ORM\Column(name="wedstrijdsoort", type="string", length=50, nullable=true)
     */
    private $wedstrijdsoort;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set wedstrijdsoort
     *
     * @param string $wedstrijdsoort
     * @return WedstrijdSoort
     */
    public function setWedstrijdsoort($wedstrijdsoort)
    {
        $this->wedstrijdsoort = $wedstrijdsoort;

        return $this;
    }

    /**
     * Get wedstrijdsoort
     *
     * @return string 
     */
    public function getWedstrijdsoort()
    {
        return $this->wedstrijdsoort;
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
    
    public function __toString()
    { 
        return $this->wedstrijdsoort; 
    }
}
