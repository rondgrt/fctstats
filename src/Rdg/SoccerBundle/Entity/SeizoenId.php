<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeizoenId
 *
 * @ORM\Table(name="seizoen_id")
 * @ORM\Entity
 */
class SeizoenId
{
    /**
     * @var string
     *
     * @ORM\Column(name="seizoen", type="string", length=50, nullable=true)
     */
    private $seizoen;

    /**
     * @var string
     *
     * @ORM\Column(name="divisie", type="string", length=50, nullable=true)
     */
    private $divisie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set seizoen
     *
     * @param string $seizoen
     * @return SeizoenId
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
     * Set divisie
     *
     * @param string $divisie
     * @return SeizoenId
     */
    public function setDivisie($divisie)
    {
        $this->divisie = $divisie;

        return $this;
    }

    /**
     * Get divisie
     *
     * @return string 
     */
    public function getDivisie()
    {
        return $this->divisie;
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
