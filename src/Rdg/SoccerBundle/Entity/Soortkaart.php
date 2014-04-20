<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soortkaart
 *
 * @ORM\Table(name="soortkaart")
 * @ORM\Entity
 */
class Soortkaart
{
    /**
     * @var string
     *
     * @ORM\Column(name="soortkaart", type="string", length=50, nullable=true)
     */
    private $soortkaart;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set soortkaart
     *
     * @param string $soortkaart
     * @return Soortkaart
     */
    public function setSoortkaart($soortkaart)
    {
        $this->soortkaart = $soortkaart;

        return $this;
    }

    /**
     * Get soortkaart
     *
     * @return string 
     */
    public function getSoortkaart()
    {
        return $this->soortkaart;
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
